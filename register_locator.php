<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer register page</title>
    <style >
        body,html{
            background-color: #24252A;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
        }

        .input-group{
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            align-items: center;
        }

        #login{
            display: flex;
            flex-flow: column;
            width: 900px;
            height:370px;
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
            display:flex;
            flex-flow: column;
            margin: 0 10px 0 10px;

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
        <p>Register</p>
        <form action="">      
            <div class="input-group">
                <div class="input">
                    <label for="name">Company Name</label>
                    <input id="name" type="text">
                </div>    
                <div class="input">
                    <label for="name">Nature of Business</label>
                    <input id="name" type="text">
                </div>  
                <div class="input">
                    <label for="name">Business Location/Address</label>
                    <input id="name" type="text">
                </div>  
                <div class="input">
                    <label for="email">Contact Number</label>
                    <input id="email" type="email">
                </div>
                <div class="input">
                    <label for="email">Person-in-charge</label>
                    <input id="email" type="email">
                </div>
                <div class="input">
                    <label for="email">Copy of Business Registration</label>
                    <input id="email" type="file">
                </div>
            </div>
            <hr>
            <div class="input-group">
                <div class="input">
                    <label for="name">Email Address</label>
                    <input id="name" type="text">
                </div>  
                <div class="input">
                    <label for="name">Password</label>
                    <input id="name" type="text">
                </div>   
                <div class="input">
                    <label for="name">Confirm Password</label>
                    <input id="name" type="text">
                </div>   
            </div>
            <button class="btn" type="submit">Register</button> <br>
            <a href="login.php">Already have an account?</a> |
            <a href="index.php">Return to landing page</a>
        </form>
    </div>
</body>
</html>