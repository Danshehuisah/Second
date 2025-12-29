<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxima Admin Page</title>
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <!-- <link rel="stylesheet" href="/second.css"> -->
     <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="nav-and-logo" role="navigation" aria-label="Primary">
     <div class="pic-container">
        <img src="/IMAGES/logo.jpg" width="100" height="50" alt="Proxima Design Studio logo" id="home">
      </div>
      
     <!-- </div> -->
        <!-- <div class="php">  -->
    <div class="dash-container" aria-label="Open menu" aria-expanded="false" aria-controls="primary-nav">
        <span class="dash dash1"></span>
        <span class="dash dash2"></span>
        <span class="dash dash3"></span>
      </div>

      <nav id="primary-nav">
        <ul>
            
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#" class="nav-link">Messages</a></li>
          <li><a href="#" class="nav-link">Featured Projects</a></li>
          <li><a href="#" class="nav-link">New Designs</a></li>
        </ul>
      </nav>
    </div>

    <!-- <h1 class="welcome">WELCOME TO <span>PROXIMA</span> </h1> -->
      <!-- <h2><span>ADMIN PAGE</span></h2> -->
       <form action="heading.php" method="POST" enctype="multipart/form-data">
    
            <div class="pro-pic">
                
                  <label for="photoInput">


                     <div class="preview">
                      <!-- <img src="uploads/<?php echo htmlspecialchars($profilePic); ?>" id="img" alt="Profile-pic" width="150"> -->
                       <img src="hero-pic.jpg" alt="hero">
                    </div>

                </label>
                <input type="file" id="photoInput" accept="image/*" name="photoInput">
                            </div>
                <input type="submit" id="submit" value="submit" name="submit">
                </form>


    <script src="/newsecond.js"></script>
</body>
</html>