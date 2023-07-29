$(document).ready(function(){
  $("button").click(function(){
    $("#p1").toggle();
  });
});

$(document).ready(function(){
  setInterval(function(){
      var date = new Date();
      var datetime = date.toLocaleString();
      $('#datetime').html(datetime);
  },1000);
});

function validateForm(){
  var firstName = document.getElementById("fname").value;
  var middleName = document.getElementById("mname").value;
  var lastName = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("pass").value;
  
  if (firstName=="") {
    alert("Please fill out first name");
    return false;
  }

  if (middleName == "") {
    alert("Please fill out middle name");
    return false;
  }

  if (lastName == "") {
    alert("Please fill out last name");
    return false;
  }
  
  var emailRegex = /^\S+@\S+\.\S+$/;
  
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address");
    return false;
  }

  if (password.length < 8) {
    alert("Password must be at least 8 characters long");
    return false;
  }

}



function search(){
  var email = document.getElementById("email").value;
  var xttp= new XMLHttpRequest();
  xttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status== 200)
    {
      document.getElementById("print").innerHTML=this.responseText;
    }
  }

  xttp.open("POST", "http://localhost/Project/Admin/Control/searchUser.php", true);
  xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xttp.send("email="+email);
}