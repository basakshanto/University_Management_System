function validateFrom(){
    var eduQuali = document.getElementById("eduq").value;
    var prefDept = document.getElementById("pdep").value;
    var techEx = document.getElementById("tex").value;
    var prefSub = document.getElementById("psub").value;
    var email = document.getElementById("email").value;
   
    var emailRegex = /^\S+@\S+\.\S+$/;
    
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }
    
    if (eduQuali == 'default') {
      alert("Please select education qualification");
      return false;
    }
  
    if (prefDept == 'default') {
      alert("Please select preferable department");
      return false;
    }
  
    if (techEx == 'default') {
      alert("Please select teaching experience");
      return false;
    }

    if (prefSub =='default') {
        alert("Please select preferable subject");
        return false;
      }
    
  
  }
  