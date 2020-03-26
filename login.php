<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,html{
            background-color: #24252A;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
        }
        #login{
            display: flex;
            flex-flow: column;
            width: 300px;
            height:300px;
            border: 1px solid black;
            text-align: center;
            background-color: #F0F0F0;
            border-radius: 8px;
            padding: 20px;
        }

        p{
            margin: 0;
            padding: 0;
            color: black;
            font-size: 30px;
            margin-bottom: 10px;
            border-bottom: 1px solid #696969;
            padding-bottom: 10px;
        }

        .input{
           display: flex;
           flex-flow: column;
           text-align: left;
        }

        .input label{
            font-weight: bold;
            font-size: 15px;
            color: grey;
            margin-bottom: 3px;
        }

        .input input{
            margin-bottom: 10px;
            height: 28px;
            border-radius: 5px;
            border: .5px solid grey;
            font-size: 15px;
            color: #696969;
            padding: 5px;
            padding-left: 5px;
            padding-right: 5px;
        }

        .input input:focus{
           border-color:  skyblue;
        }

        button,a{
            display: inline-block;
            text-align: center;
            margin: 0;
            padding: 0;
        }

         .btn{
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border:none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            font-family: "Montserrat", sans-serif;
            font-weight: bold;
            font-size: 15px;
            margin-bottom: 5px;
            color: #F8F8F8;
            margin-top: 10px;
        }
        
        .btn:hover{
            background-color: rgba(0, 136, 169, 0.7);
        }

        a{
            margin-top: 10px;
            font-size: 15px;
            text-decoration: none;
            color: #696969;
        }

        a:visited{
            color: #696969;
        }


        

    </style>
</head>
<body >
    <div id="login">
        <p>Login</p>
        <form action="">          
            <div class="input">
                <label for="email">Email</label>
                <input   id="email" type="email">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input  id="password" type="password">
            </div>
            <button class="btn" type="submit">Login</button> <br>
            <a href="register.php">Don't have an account yet?</a>
            <a href="index.php">Return to landing page</a>
        </form>
    </div>
</body>
</html>