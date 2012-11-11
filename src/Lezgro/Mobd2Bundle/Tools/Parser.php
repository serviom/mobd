<?php

namespace Lezgro\Mobd2Bundle\Tools;

class Parser extends Extclass
{
    
  const FBGRAPHURI = 'https://graph.facebook.com/';
  const FBGRAPHUSERINFO = '?fields=id,name,email,birthday,last_name,first_name,username&access_token=';
  const FBUSERPICTURES = 'picture';
  const FBUSERFRIENDS = '?fields=friends.fields(id,birthday,name,last_name,first_name,username)&access_token=';
 
  protected  $_client;
    
  protected  $_htmlbody;
  
  protected  $_htmlcode;
  protected  $_fbid;
  protected  $_token;
    
  private $_headers  = array(
        'Accept-Language: uk,ru;q=0.8,en-us;q=0.5,en;q=0.3',
        'Connection: Keep-Alive',
        'Accept-Charset: windows-1251,utf-8;q=0.7,*;q=0.7',
        'Keep-Alive: 300',
        'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4'
        );
        
        
  private $_config  = array(
            'adapter'   => 'Zend_Http_Client_Adapter_Curl',
            'curloptions' => array(
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HEADER =>  false,
                CURLOPT_VERBOSE => false,
                CURLOPT_FRESH_CONNECT => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_MAXCONNECTS => 20,
                CURLOPT_TIMEOUT => 300,
                CURLOPT_SSL_VERIFYPEER => 0
                // CURLOPT_PROXY => '199.119.76.111:8080'
             )
		);
		
	
  public function __construct($options)  {
      $this->setOptions($options);
  }	
		
  /* допылял */
  public  function _getClient() {
        if ($this->_client == null ) {
            $client = new \Zend_Http_Client();
            $client->setConfig($this->_config);
            $client->setHeaders($this->_headers);
            $client->setCookieJar();
            $this->_client = $client;
         }
        return $this->_client;
  }
    
    
    /**
     * Повертає вже оброблений html код або з кешу або зграблений з сайту 
     * Html код уже переведений в кодіровку utf-8
     */
    public function getBody($uri = null, $method = 'GET', $param =  array ()) {
        if($uri == null){
            throw new Zend_Exception('Не указана сылка для парсинга');
        } else {
            $this->_htmlcode  = $this->_getSource($uri,$method,$param);
        }      

        if($this->get_charset() == 'cp1251') {
            // Переводимо в кодировку UTF-8
            $this->_htmlcode = mb_convert_encoding( $this->_htmlcode, 'utf-8', 'windows-1251');
            $this->_htmlcode = str_replace('charset=windows-1251', 'charset=utf-8', $this->_htmlcode);
        }
        
        return mb_convert_encoding( $this->_htmlcode, 'HTML-ENTITIES', 'utf-8');
    }
    
    
   /**
    *  Повертаємо тіло запросу 
    *  $uri - uri сайту
    *  $param - post параметри
    */
	protected function _getSource($uri = null, $method = 'GET', $param =  array ()) {
        if(is_array($param) && count($param) > 0 && $method == 'POST') {
            foreach ($param as $k => $v){
                $this->_client->setParameterPost($k,$v);
            }
        }
        $this->_client->setUri($uri); 
        try {
            $content = $this->_client->request($method);
            return $content->getBody();
        } catch(Exception $e) {
            throw new Zend_Exception('Не можу підключитися до сайту або інші трабли!');
        }
	}
    
    /*
     * Визначаємо кодіровку сайту
     */
    public function get_charset() {
		if(stripos($this->_htmlcode,'charset=windows-1251')){
			return 'cp1251';
		} elseif(stripos($this->_htmlcode,'charset=utf-8')){
			return 'utf8';
		} elseif(stripos($this->_htmlcode,'charset=utf8')){
			return 'utf8';
		}		
	}
    
    public function getUserInfo() {
        $this->_getClient();
        $body = $this->getBody(self::FBGRAPHURI . $this->_fbid . self::FBGRAPHUSERINFO . $this->_token );
        return \Zend_Json::decode($body);
    }
    
    public function getUserFriends() {
        $this->_getClient();
        $body = $this->getBody(self::FBGRAPHURI . $this->_fbid . self::FBUSERFRIENDS . $this->_token );
        $friends =  \Zend_Json::decode($body);
        
        $arrayFriends = $friends['friends']['data'];
        if(array_key_exists('next',$friends['friends']['paging'])) {
            $body = $this->getBody($friends['friends']['paging']['next']);
            $friends =  \Zend_Json::decode($body);
        }
        $arrayFriends = array_merge($arrayFriends,$friends['data']);
        while(array_key_exists('next',$friends['paging'])) {
            $body = $this->getBody($friends['paging']['next']);
            $friends =  \Zend_Json::decode($body);
            $arrayFriends = array_merge($arrayFriends,$friends['data']);
        }
        return $arrayFriends;
    }
    
    
}