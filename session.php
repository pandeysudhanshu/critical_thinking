<?php 



session_start() ;

$username = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'phpmyadmin' , 'some_pass' , 'audit_course');


if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  $user_check_query = "SELECT * FROM user_response WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "You have already given the test");
    }
  }


if (count($errors) == 0) {
    $_SESSION['username'] = $username;
    header('location: test.php');
  }

  $u = $username ;

}






 //$_SESSION['answer1']  = $_POST['answer1'] ;
  //$_SESSION['answer2']  = $_POST['answer2'] ;
   //$_SESSION['answer3']  = $_POST['answer3'] ;
  //  $_SESSION['answer4']  = $_POST['answer4'] ;
    // $_SESSION['answer5']  = $_POST['answer5'] ;
      //$_SESSION['answer6']  = $_POST['answer6'] ;
       //$_SESSION['answer7']  = $_POST['answer7'] ;
        //$_SESSION['answer8']  = $_POST['answer8'] ;
         //$_SESSION['answer9']  = $_POST['answer9'] ;
          //$_SESSION['answer10']  = $_POST['answer10'] ;

?>