<?php

include('config/db_connect.php');
session_start();
// $_SERVER['REQUEST_METHOD'] = 'POST';
echo $_SERVER['REQUEST_METHOD'];
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  



  if (isset($_POST['submit'])) {
    $email = $_SESSION['email'];
    $file = $_FILES['photoInput'];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ['jpg', 'jpeg', 'png'];

    if (in_array($fileActualExt, $allowed)) {
      
      if ($fileError === 0) {
        
        if ($fileSize < 2000000) {
          $newName = uniqid('', true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$newName;

          move_uploaded_file($fileTmp, $fileDestination);
          $sql = "UPDATE proxima SET pro_pic= '$newName' WHERE email = '$email'";
          if ($conn->query($sql)) {
            echo "Uploaded succesfully";
            $sql = "SELECT pro_pic FROM proxima WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
          } 
        } else {
           echo "File too large"; 
        }

      } else {
        echo "Upload error!";
      }

    } else {
      echo "Invalid file type!";
    }
  }

  // }
  //  else {
  //   echo 'it is not post request';
  // }
?>