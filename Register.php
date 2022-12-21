<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="Style/Style.css">
</head>

<body>
    <div class="form-container">
        <form class="bg" method="GET" id="regform" action="proses.php">
            <h1>Register</h1>
            <div class="form-input">
                <label>Nama</label><br>
                <input class="form" name="form_nama" type="text"><br>
            </div>
            <div class="form-input">
                <label>Email</label><br>
                <input class="form" name="form_email" type="text"><br>
            </div>
            <div class="form-input">
                <label>Password</label><br>
                <input class="form" name="form_pass" type="password"><br>
            </div>
            <div class="form-input">
                <label>Re-Enter Password</label><br>
                <input class="form" name="form_Repass" type="password"><br>
            </div>
            <div class="form-input">
                <label>Alamat</label><br>
                <input class="form" name="form_alamat" type="text"><br>
            </div>
            <div class="form-input">
                <label>Nomor Telepon</label><br>
                <input class="form" name="form_telp" type="number"><br>
            </div>
            <button>Register</button>
        </form>
    </div>
</body>
<script src="scripts.js"></script>
</html>