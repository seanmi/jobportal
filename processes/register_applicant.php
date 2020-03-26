    <?php
        require "../bootstrap.php";
        session_start();

        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];

            if(!empty($name) && !empty($email) && !empty($password) && !empty($confirm)){ //check if all fields are present
                if($password == $confirm){
                    $user = $capsule->select("Select * from accounts");
                    print_r($user->count());
                }else{
                    $_SESSION["error"] = "Password and Confirm Password must match!";
                    header("Location: ../register.php");
                }
            }else{
                $_SESSION["error"] = "All fields are required";
                header("Location: ../register.php");
            }
        }else{
            header("Location: ../register.php");
        }
    ?>