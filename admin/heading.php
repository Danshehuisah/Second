<?php

include('config/db_connect.php');
// define('BASE_URL', '/second/');
session_start();
// $_SERVER['REQUEST_METHOD'] = 'POST';
echo $_SERVER['REQUEST_METHOD'];
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  

  $profilePic = 'sample.jpg';

  if ($email) {
    $sql = "SELECT pro_pic FROM proxima WHERE email = ?";
    $stmt =$conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetcch_assoc()) {
      if (!empty($row['pro_pic'])) {
        $profilePic = $row['pro_pic'];
      }
    }
  }



  // if (isset($_POST['submit'])) {
  //   $email = $_SESSION['email'];
  //   $file = $_FILES['photoInput'];
  //   $fileName = $file['name'];
  //   $fileTmp = $file['tmp_name'];
  //   $fileSize = $file['size'];
  //   $fileError = $file['error'];

  //   $fileExt = explode('.', $fileName);
  //   $fileActualExt = strtolower(end($fileExt));

  //   $allowed = ['jpg', 'jpeg', 'png'];

  //   if (in_array($fileActualExt, $allowed)) {
      
  //     if ($fileError === 0) {
        
  //       if ($fileSize < 2000000) {
  //         $newName = uniqid('', true).".".$fileActualExt;
  //         $fileDestination = 'uploads/'.$newName;

  //         move_uploaded_file($fileTmp, $fileDestination);
  //         $sql2 = "UPDATE proxima SET pro_pic= '$newName' WHERE email = '$email'";
  //         if ($conn->query($sql2)) {
  //           echo "Uploaded succesfully";
  //           $sql2 = "SELECT pro_pic FROM proxima WHERE email = ?";
  //           $stmt2 = $conn->prepare($sql2);
  //           $stmt2->bind_param("s", $email);
  //           $stmt2->execute();
  //           $result2 = $stmt2->get_result();
  //           // print_r($result[1]);
  //         } 
  //       } else {
  //          echo "File too large"; 
  //       }

  //     } else {
  //       echo "Upload error!";
  //     }

  //   } else {
  //     echo "Invalid file type!";
  //   }
  // }



if (isset($_POST['submit'])) {

  $email = $_SESSION['email'] ?? null;
  $file = $_FILES['photoInput'];

  if ($file['error'] === 0) {

    $allowed = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (in_array($ext, $allowed)) {

      if ($file['size'] < 2000000) {

        $newName = uniqid('pro_', true) . '.' . $ext;
        $destination = 'uploads/' . $newName;

        if (move_uploaded_file($file['tmp_name'], $destination)) {

          $sql = "UPDATE proxima SET pro_pic = ? WHERE email = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $newName, $email);
          $stmt->execute();

          header("Location: admin.php"); // reload page
          exit;
        }

      } else {
        echo "File too large";
      }
    } else {
      echo "Invalid file type";
    }
  }
}


  // }
  //  else {
  //   echo 'it is not post request';
  // }
?>