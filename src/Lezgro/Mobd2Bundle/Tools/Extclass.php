<?php

namespace Lezgro\Mobd2Bundle\Tools;

class Extclass {
    
    
    /**
     * Getter method
     */
    public function __get($name)
    {
        $method = $this->_convertName($name, '_get');
        $prop = $this->_convertName($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        } elseif(property_exists($this, $prop)) {
            return $this->$prop;
        }
        return null;
    }
   
   
    /**
     * Set all options
     */
    public function setOptions($options)
    {
        $options = (array)$options;
        foreach ($options as $key => $value) {
            $this->__set($key, $value);
        }
        return $this;
    }

    
    /**
     * Setter method
     */
    public function __set($name, $value)
    {
        $method = $this->_convertName($name, '_set');
        $prop = $this->_convertName($name);
        if (method_exists($this, $method)) {
            $this->$method($value);
        } elseif(property_exists($this, $prop)) {
            $this->$prop = $value;
        }
    }
    
    
    /**
     * get valid properties name or function
     */
    protected function _convertName($name, $prefix = '_')
    {
        $m = explode('_', $name);
        if ($prefix) {
            array_unshift($m, $prefix);
        }
        if (count($m) > 1 && $prefix != '_') {
            $f = create_function('&$v,$k', 'if ($k) {$v = ucfirst($v);} else {$v = strtolower($v);}');
            array_walk($m, $f);
        }
        elseif ($prefix = '_' && count($m) > 2) {
            $f = create_function('&$v,$k', 'if ($k > 1) {$v = ucfirst($v);} else {$v = strtolower($v);}');
            array_walk($m, $f);
        }
        return join('', $m);
    }
     
    
      /**
     * Caller method
     */
    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), (array)$arguments);
        }
        elseif (method_exists($this, '_' . $method)) {
            return call_user_func_array(array($this, '_' . $method), (array)$arguments);
        }
        else {
            if (substr($method, 0, 3) == 'get') {
                $prop = substr($method, 3);
                $prop = strtolower(substr($prop, 0, 1)).substr($prop, 1);
                return $this->__get($prop);
            }
            elseif (substr($method, 0, 3) == 'set') {
                $prop = substr($method, 3);
                $prop = strtolower(substr($prop, 0, 1)).substr($prop, 1);
                $this->__set($prop, $arguments[0]);
                return $this;
            }
            else {
                return $this;
            }
        };
    }
    

  /**
	 * Returns an associative array of object properties
     * 
	 * @access	public
	 * @param	boolean $public If true, returns only the public properties
	 * @return	array parameters
 	 */
   public function getProperties($public = true) {
	{
		$vars  = get_object_vars($this);
        if($public)
		{
			foreach ($vars as $key => $value)
			{
				if ('_' == substr($key, 0, 1)) {
					unset($vars[$key]);
				}
			}
		}
        return $vars;
    	}
    }
}

