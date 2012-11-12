var check = new (

    function()
    {
  
      this.regexpremail = /^\s*([a-z0-9\-_\.\+]+@(?:[a-z0-9\-_]+\.)+[a-z]{2,4})\s*$/i;
      
      
      this.isEmail = function(field) {
        var re = this.regexpremail;
        if(re.test(field)) { 
          return true;
        } else {
          return false;
        }
      }
 
     
      this.isNotEmpty = function(field) {
        if(field == null || field.length == 0) { 	
          return false;
        } else { 
          return true;
        }
      }
      
      
      /**
       * validation field
       *
       * @param field string   - field
       * @param type string    - type field
       */
       
      this.isValid = function(field,type) {
         if(this.isNotEmpty(field)) {
          switch (type) {
            case 'email': 
               if(this.isEmail(field)) {
                  return true;
               } else {
                  return false;
               }
            break;
           
           default:
             return true;
          }
           
         
         } else {
          return false;
         }
    }
});