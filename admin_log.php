<?php 
session_start();
include "db_admin.php";

if (isset($_POST['identity']) && isset($_POST['password'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $id = validate($_POST['identity']);
    $pass = validate($_POST['password']);

    if (empty($id)) {
        header("location: index.php?error=User ID is required");
        exit();
    }else if(empty($pass)){
      header("location: index.php?error=password is required");
      exit();
    }else{
        $sql = "SELECT * FROM admin_log WHERE user_id='$id' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            if ($row ['user_id'] === $id && $row['password'] === $pass) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: anonymous-admin.php");
            }else{
              header("location: index.php?error=Incorrect User ID or password");
              exit();
            }
             
        }else{
          header("location: index.php?error=Incorrect User ID or password");
          exit();
        }

    }

}else{
  header("location: index.php");
  exit();
}