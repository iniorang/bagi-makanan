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

function register(){
    event.preventDefault();
    var username = document.getElementById("reg_user").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("reg_pass").value;
    var telp = document.getElementById("reg_no").value;
    console.log(username);
    console.log(email);
    console.log(password);
    console.log(telp);
    
    if(username.length === 0 && password.length === 0 && email.length === 0 && telp.length === 0){
        alert("Kurang lengkap");
    }
    else{
        alert("Berhasil teregistrasi");
        window.location.replace("Login.html");
    }
}