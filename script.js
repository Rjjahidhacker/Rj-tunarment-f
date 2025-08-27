function register() {
  let user = document.getElementById("regUser").value;
  let pass = document.getElementById("regPass").value;

  if(user && pass){
    localStorage.setItem(user, pass);
    alert("✅ Registration Successful!");
  } else {
    alert("Please fill all fields!");
  }
}

function login() {
  let user = document.getElementById("loginUser").value;
  let pass = document.getElementById("loginPass").value;

  if(localStorage.getItem(user) === pass){
    alert("✅ Login Successful!");
    window.location.href = "teams.html";
  } else {
    alert("❌ Invalid Username or Password!");
  }
}