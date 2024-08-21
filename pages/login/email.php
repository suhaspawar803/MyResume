<?php
 session_start();

  use PHPMailer\PHPMailer\PHPMailer;

    $username = $_POST['username'];
    $otp = rand(1000, 9999);
    include '../../data.php';
    if ($db) {
      $sql = "SELECT username FROM users where username='$username';";
      $ret = pg_query($db, $sql);
      $pass = pg_fetch_array($ret);
    }
    if ($pass) {
      require_once "PHPMailer/src/PHPMailer.php";
      require_once "PHPMailer/src/SMTP.php";
      require_once "PHPMailer/src/Exception.php";

      @$mail = new PHPMailer(true);
          $mail = new PHPMailer();
          $mail->IsSMTP();  // telling the class to use SMTP
          $mail->SMTPDebug = 2;
          $mail->Mailer = "smtp";
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 25;
          $mail->SMTPAuth = true; // turn on SMTP authentication
          $mail->Username = "xyz@gmail.com"; // SMTP username
          $mail->Password = "12345"; // SMTP password
        //  $Mail->Priority = 1;
          $mail->AddAddress($username,$username);
          $mail->SetFrom('DMS');
          $mail->Subject  = "OTP For Changing Password ";
          $mail->Body     = 'OTP Is: '. $otp;
          $mail->WordWrap = 50;
      if ($mail->send()) {
        $_SESSION['username']=$username;
        $_SESSION['otp']=$otp;
      header("Location: forgotpass.php");
      exit();
      } else {
        $_SESSION['username'];
      header("Location: forgot.php");
      exit();
      }
      exit();
      // exit(json_encode(array($status,$response)));
    } else {
      $_SESSION['username'];
      header("Location: forgot.php");
      exit();
    }
  
  ?>