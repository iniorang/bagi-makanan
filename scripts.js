document.getElementById("loginform").addEventListener("submit",login);

function login(){
    event.preventDefault();
    var password = document.getElementById("upass").value;
    var username = document.getElementById("uname").value;
    console.log(password);
    console.log(username);
    if(username.length === 0 && password.length === 0){
        alert("Username atau password tidak boleh kosong!");
    }
    else{
        alert("Login sukses");
        window.location.replace("Landing.html");
    }
}