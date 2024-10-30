<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
<div class="container">
		<div class="row">
<body>
<div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-5 col-md-5 col-sm-6" style="margin-top: 20rem;">
                  <div class="card">
                    <div class="card-header">
                    <div class="card-header bg-info">
                    <h4 align="center"><b>Login</b></h4>
                    </div>
                    <div class="card-body">
                        <form action="proses/proses_login.php?aksi=login" method="POST">
                        <div class="form-group mb-2">
                                <label>Username : </label>
                                <input type="text" class="form-control" name="Username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group mb-2">
                                <label>Password : </label>
                                <input type="password" class="form-control" name="Password" placeholder="Masukkan Password">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">
                                Login 
                            </button>
                            <a href="register.php">Belum Punya Akun?</a>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
        </div>
    </div>
</body>
</html>