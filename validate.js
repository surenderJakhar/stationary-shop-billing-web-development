function lvalidate() {
    	var name = document.forms["login"]["lname"].value;
    	var no = document.forms["login"]["lno"].value;
    	var pwd = document.forms["login"]["lpwd"].value;
    	 if(isNaN(no) || no<999999999 || no>10000000000){
   			alert("Mobile number must be valid");
       		return false;
   			 }
   		else{
   			return true;
   		}
	}

  function rvalidate() {
      var name = document.forms["register"]["name"].value;
      var no = document.forms["register"]["no"].value;
      var pwd = document.forms["register"]["pwd"].value;
      var mail = document.forms["register"]["mail"].value;
       if(isNaN(no) || no<999999999 || no>10000000000){
        alert("Mobile number must be valid");
          return false;
         }
        else if(mail.indexOf("@")<=0 ||  x.lastIndexOf(".")<= mail.indexOf("@") || x.lastIndexOf(".")<=0){
           alert("email address must be valid");
          return false;
        }
      else{
        return true;
      }
  }