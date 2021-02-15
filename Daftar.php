<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <style>
            .card{
                
                border-radius: 8px;
                box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                height: 480px;
                margin: 6rem auto 8.1rem auto;
                width: 400px;
                

            }
            .btn-daftar{
                margin-left: 10px;
                margin-right: 10px;
                background: none;
                border: 1px solid black;
                width: 92.5%;
                padding: 10px;
                color: black;
                font-size: 18px;
                letter-spacing: 3px;
                cursor: pointer;
                border-radius: 8px;
            }
            .btn-daftar:hover{
                background: none;
            }
            .bottom{
                margin-left: 10px;
                margin-right: 10px;
                display: flex;
                justify-content: space-between;
            }
            .bottom a{
                color: black;
                font-size: 15px;
                text-decoration: none;
            }
            .bottom a:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body style="background: url(signin.png);">
        <form action="config/proses_register.php" method="POST">
        <div class="card">
            <h2 style="text-align: center;">Daftar</h2>
            <div class="form-group">
                <label>Username :</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="daftar" class="btn-daftar">Daftar</button>
            <div class="bottom">
                <a href="login.php">Login</a>
            </div>
        </div>
    </form>
    </body>
</html>