<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
    
     <style>
        body {
            background-color: #1a4e8f;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-main {
            text-align: center;
            color: #fff;
        }

        .quote {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 15px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1a4e8f;
        }
        .photo img{
            height: 120px;
        }
    </style>
    </head>

<body  style="background-color: #1a4e8f;">
    <main class="form-main">
    <div class="photo"><img src="images/header/logo.png" alt="">
            <h2> PREMIEREDGE LOGISTICS</h2></div>
        <section class="section quote login">

            <div class="wrapper">
             
                <div class="box">
                    <form action="authLogin.php" class="form" method="POST">
                        <label for="#">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </label>

                        <label for="#">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </label>

                        <label for="#">
                            <button name="login">Login</button>
                        </label>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>