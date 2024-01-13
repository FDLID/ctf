
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #191970;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        
        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #00008b;
        }
        
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .form .register-form {
            display: none;
        }
        
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        
        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }
        
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        
        .container .info span .fa {
            color: #EF3B3A;
        }
        
        body {
            background: #292929;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #292929, #292929);
            background: -moz-linear-gradient(right, #292929, #292929);
            background: -o-linear-gradient(right, #292929, #292929);
            background: linear-gradient(to left, #292929, #292929);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <title>CTF</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <img src="https://ctftime.org/media/team/favicon_5.ico" height="180" width="180" alt="dx">
<p align="justify">Terjemahkan Binary Di Bawah!<br>01000011 01010100 01000110 01000110 01000100 01001100 01111011 01101000 01100001 01111001 01110110 01100111 01110011 01100111 01011111 01111000 01111001 01110011 01101010 01011111 01101110 01110011 01111101</p>            
            <form action="solved.php" method="POST" class="login-form">
                <input type="password" name="pass" placeholder="CTFFDL{*}" />
                <button type="submit" name="akses">submit</button>


            </form>
        </div>
    </div>
</body>

</html>