<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url(signin.png);
                width: 100%;
                height: 100%;
            }
            .login {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-30%, -50%);
                
                padding: 50px;
                width: 270px;
                box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.65);
                border-radius: 15px;
            }
            .user {
                font-size: 30px ;
                
                width: 50px;
                height: 50px;
                line-height: 50px;
                position: fixed;
                left: 50%;
                top: 0;
                transform: translate(-50%, -50%);
                text-align: center;
                box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.65);
                border-radius: 50%;
            }
            .login h2{
                text-align: center;
                color: white;
                font-size: 30px;
                font-family: sans-serif;
                letter-spacing: 3px;
                padding-top: 0;
                margin-top: -20px;
            }
            .box-login{
                display: flex;
                justify-content: space-between;
                margin: 10px;
                border-bottom: 2px solid black;
                padding: 8px 0;
                border-radius: 8px;
            }
            .box-login i{
                font-size: 23px;
                color: white;
                padding: 5px 0;
            }
            .box-login input{
                width: 85%;
                padding: 5px 0;
                background: none;
                border: none;
                outline: none;
                color: white;
                font-size: 18px;
                border-radius: 8px;
            }
            .box-login input::placeholder{
                color: white;
            }
            .box-login input:hover{
                background: #6f57f7;
            }
            
            .btn-login{
                margin-left: 10px;
                margin-bottom: 20px;
                background: none;
                border: 1px solid white;
                width: 92.5%;
                padding: 10px;
                color: white;
                font-size: 18px;
                letter-spacing: 3px;
                cursor: pointer;
                border-radius: 8px;
            }
            .btn-login:hover{
                background: #e6f9ff;
            }
            .bottom{
                margin-left: 10px;
                margin-right: 10px;
                display: flex;
                justify-content: space-between;
            }
            .bottom a{
                color: white;
                font-size: 15px;
                text-decoration: white;
            }
            .bottom a:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        
        <div class="login">
            <form name="formLogin" action="config/proses_login.php" method="POST" onsubmit="return ValidateForm()">
            <div class="user">
                <span class="glyphicon glyphicon-user"></span>
            </div>

            <h2>Login</h2>

            <div class="box-login">
                <span class="glyphicon glyphicon-envelope" style="font-size: 27px;"></span>
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="box-login">
                <span class="glyphicon glyphicon-lock" style="font-size: 27px;"></span>
                <input type="password" name="password" placeholder="Password">
            </div>

            <button type="submit" name="login" class="btn-login">Login</button>
            <div class="bottom">
                <a href="daftar.php">Daftar</a>
            </div>
        </form>
        </div>
        

        <script>
            function ValidateForm(){
                if (document.forms["formLogin"]["username"].value == "") {
                    alert("Username Tidak Boleh kosong");
                    document.forms["formLogin"]["username"].focus();
                    return false;
                }
                if (document.forms["formLogin"]["password"].value == "") {
                    alert("Password Tidak Boleh kosong");
                    document.forms["formLogin"]["password"].focus();
                    return false;
                }else{
                    alert("Login Success");
                }
            }
        </script>
    </body>
</html>