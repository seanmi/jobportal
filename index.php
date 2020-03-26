<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
</head>
<body>
    <header>
        <h3 class="logo">Clark Job Portal</h3>
        <nav>
            <ul class="nav__links">
                <li><a href="#jobs">Jobs</a></li>
                <li><a href="#companies">Companies</a></li>
            </ul>
        </nav>
        <div>
            <a href="#" id="myBtn" class="cta"><button>Sign up</button></a>   
            <a href="login.php" class="login"><button>Login</button></a>   
        </div>
    </header>

    <section class="section1" >
        <p>Search for Jobs</p>
        <div class="input" > 
            <input type="text" name="" id="">
            <a href="#" class="cta"><button >Search</button> </a>
        </div>
    </section>
    <div id="jobs"></div>
    <section class="section2" >
        <p class="section__label">Latest Jobs</p>
        <div class="post">
            <div class="post__heading">
                <p > Kitchen Staff</p>
                <p >Nov 12 2020</p>
            </div>
            <p>Clark Development Corporation</p>
            <p>Description:</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita obcaecati incidunt temporibus vero corrupti voluptatibus natus sunt ipsa sapiente delectus.</p>
            <a href="" class="details" style="margin-top: 10px;">Details</a>
            <hr style="margin-top: 20px;">
        </div>
        <div class="post">
            <div class="post__heading">
                <p > Kitchen Staff</p>
                <p >Nov 12 2020</p>
            </div>
            <p>Clark Development Corporation</p>
            <p>Description:</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita obcaecati incidunt temporibus vero corrupti voluptatibus natus sunt ipsa sapiente delectus.</p>
            <a href="" class="details" style="margin-top: 10px;">Details</a>
            <hr style="margin-top: 20px;">
        </div> 
    </section>
    <div id="companies"></div>
    <section class="section3">
        <p class="section__label">Registered Companies</p>
        <table style="width:100%">
            <tr>
              <th style="width:30%;">Company</th>
              <th style="text-align: center;">Address</th>
            </tr>
            <tr>
              <td style="width:30%;">Clark Development Corporation </td>
              <td style="text-align: center;">E Quirino, Clark Freeport, Angeles, Pampanga</td>
            </tr>
            <tr>
              <td style="width:30%;">Beepo</td>
              <td style="text-align: center;">E Quirino, Clark Freeport, Angeles, Pampanga</td>
            </tr>
          </table>
    </section>
    
    <footer>
        <div>
            <p>Links</p>
            <ul>
                <li>Facebook Page</li>
                <li>Instagram Page</li>
                <li>Twitter Page</li>
            </ul>
        </div>
        <div>
            <p>Resources </p>
            <ul>
                <li>How to apply?</li>
                <li>FAQ</li>
                <li>Policy</li>
            </ul>
        </div>
    </footer>
    <p class="copyright" style="display: block;">Copyright © 2020 Clark Job Portal. All Rights Reserved </p>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <span class="close">&times;</span>
    <a href="register_locator.php" class="cta"><button>Signup as Employer </button> </a>  |
    <a href="register.php" class="login"><button>Signup as Applicant</button> </a>
    </div>

    </div>
    <!--  -->


    <script src="js/modal.js"></script>
</body>



</html>