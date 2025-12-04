<?php

include('admin_login_vet.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxima Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./second.css">  -->

</head>
<body>
     <!-- <div class="nav-and-logo" role="navigation" aria-label="Primary"> -->
      <div class="pic-container">
        <img src="/IMAGES/logo.jpg" width="100" height="50" alt="Proxima Design Studio logo" id="home">
      </div>
      <h1 class="welcome">WELCOME TO <span>PROXIMA</span> </h1>
      <h2><span>ADMIN PAGE</span></h2>
     <!-- </div> -->
        <!-- <div class="php">  -->

    <form id="logInForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            
        <p></p>    
        </div>

        
            <div class="container">
                <h2>Enter Your Login Details</h2>

                <div class="container-content">
                    <div class="input-group">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Enter Your Email Address" name="email"  autocomplete="off"> 
                    </div>
                    <p class="error"><?php echo $error['email'] ?? ""?> </p>
                        
                    <div class="input-group">
                        <label for="password"> Password: </label>
                        <input type="password" placeholder="Enter Your Password" name="password" autocomplete="off">
                    </div>
                    <p class="error"><?php echo $error['password'] ?? ""?> </p>
                    <p class="error"><?php echo $error['login'] ?? ""?> </p>
                    <div  >
                         <button id="login-button" type="submit" name="submit">  Enter</button> 
                    </div>
                   
                </div>
                <div class="p-resetSignup">
                    <a href="#" id="resetPassword">Forgot password? Click to reset</a>
                    <a href="student sign-up.php" id="signUp">Sign up here</a>                    
                </div>
                <p class="loginCopyright"> &copy; 2025 Proxima Design Studio. All rights reserved.  </p>
            </div>

    </form>

    
</body>
</html>