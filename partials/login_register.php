<?php
// session_start();

require('connection.php');
// for login

// name="admin_login"
// if(isset($_GET['submit'])) {
//   $var = $_GET['option1'];
//   if(isset($var)) {
//       echo "Option 1 submitted successfully";
//   }
// }


if(isset($_POST['submitted'])){

if(isset($_POST['user_login'])){
      $username = $_POST['user_id'];
      $user_exist_query = "SELECT * FROM `user_login` WHERE user_id = '$username' ";
      $result = mysqli_query($con,$user_exist_query);
    //   $count = mysqli_num_rows($result);
    //   echo $count;
      if($result){
        // if(mysqli_num_rows($result) == 1){
            if(mysqli_num_rows($result) == 1){
            $result_fetch = mysqli_fetch_assoc($result);
            $pswd = $_POST['password'];
            $passwd = $result_fetch['password'];
            if($pswd == $passwd){
                echo "User Login Successful";
                // $_SESSION['logged_in']=true;
                // $_SESSION['username']=$result_fetch['username'];
                header("location: index.php");
            }   
            else{
                echo"
                    <script>
                    alert('Incorrect Password.');
                    window.location.href='index.php';
                    </script>
                    ";
            }
        }
        else{
            echo"
                <script>
                alert('User not registered Please contact admin.');
                // window.location.href='index.php';
                </script>
                ";
        }
      }
      else{
        echo"
        <script>
        alert('Cannot run query');
        window.location.href='../login/index.php';
        </script>
        ";
    }
}


if(isset($_POST['admin_login'])){
    $username = $_POST['user_id'];
    $user_exist_query = "SELECT * FROM `admin_login` WHERE admin_id = '$username' ";
    $result = mysqli_query($con,$user_exist_query);
  //   $count = mysqli_num_rows($result);
  //   echo $count;
    if($result){
      // if(mysqli_num_rows($result) == 1){
          if(mysqli_num_rows($result) == 1){
          $result_fetch = mysqli_fetch_assoc($result);
          $pswd = $_POST['password'];
          $passwd = $result_fetch['password'];
          if($pswd == $passwd){
              echo "Admin Login Successful.";
              // $_SESSION['logged_in']=true;
              // $_SESSION['username']=$result_fetch['username'];
              header("location: ../admin_dashboard.php");
          }   
          else{
              echo"
                  <script>
                  alert('Incorrect Password.');
                  window.location.href='index.php';
                  </script>
                  ";
          }
      }
      else{
          echo"
              <script>
              alert('Admin not registered Please contact admin.');
              window.location.href='index.php';
              </script>
              ";
      }
    }
    else{
      echo"
      <script>
      alert('Cannot run query');
      window.location.href='../login/index.php';
      </script>
      ";
  }
}
}
else{
  echo"
      <script>
      alert('Cannot run query Password.');
      window.location.href='index.php';
      </script>
      ";
}

?>