<?php
include('includes/config.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_Password_reset($get_name,$get_email,$token){

    $mail = new PHPMailer(true);
                         //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dabalenaggasa@gmail.com';                     //SMTP username
    $mail->Password   = 'qpcqlrwemjfolxgf';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dabalenaggasa@gmail.com');
    $mail->addAddress($get_email);     //Add a recipient
   //Attachments
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'reset password notification';
    $template="
    <h4>hello!</h4><br>
    <h2>you are receiving this email becouse we received a password reset request for your account</h2>
    <br><a href='http://localhost/ASTU-website/admin/change_password.php?token=$token&email=$get_email'><button >reset password</button></a>
    ";
    $mail->Body=$template;

    $mail->send();

}

if(isset($_POST['passwordreset'])) 
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $token=md5(rand());

    $check_email="SELECT AdminEmail,AdminUserName FROM admintbl WHERE AdminEmail='$email' LIMIT 1";
    $result=mysqli_query($con,$check_email);

    if (mysqli_num_rows($result)>0) {
        $row=mysqli_fetch_array($result);
        $get_name=$row['AdminUserName'];
        $get_email=$row['AdminEmail'];

        $update="UPDATE admintbl SET token='$token' WHERE AdminEmail='$email' LIMIT 1";
        $update_token=mysqli_query($con,$update);

        if ($update_token) {
            send_Password_reset($get_name,$get_email,$token);
            $_SESSION['status-succes']="we e-mailed you a password reset link!";
            header("location:passwordreset.php");
            exit(0);
        }
    }
    else {
        $_SESSION['status-failed']="No email found!";
        header("location:passwordreset.php");
        exit(0);
    }

}




if (isset($_POST['change-password'])) {
    $get_email=$_POST['email'];
    $new_password=$_POST['new-password'];
    $confirm_password=$_POST['confirm-password'];
    $token=mysqli_real_escape_string($con,$_POST['passsword-token']);

    if (!empty($token)) {
        $query="SELECT token FROM admintbl WHERE token='$token' LIMIT 1";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            if ($new_password==$confirm_password) {
                $newhash_password=password_hash($new_password, PASSWORD_BCRYPT, ['cost' => 12]);
                $update_pass=" UPDATE admintbl SET AdminPassword='$newhash_password' WHERE token='$token' LIMIT 1 ";
                $update_pass_run=mysqli_query($con,$update_pass);
                if ($update_pass_run) {
                    $new_token=md5(rand())."dabale";
                    $update_new_token=" UPDATE admintbl SET token=' $new_token' WHERE token='$token' LIMIT 1 ";
                    $update_new_token_run=mysqli_query($con,$update_new_token);
                    $_SESSION['status-succes']="your password is succesfuly updated!";
                    header("location:index.php");
                    exit(0);
                }
            }
            else{
                $_SESSION['password-info']="**password and confirm password does not match!**";
                header("location:change_password.php?token=$token&email=$get_email");
                exit(0);
            }
        }
        else{
            $_SESSION['status-failed']="invalid link!";
            header("location:change_password.php?token=$token&email=$get_email");
            exit(0);
        }
    }
    else {
        $_SESSION['status-failed']="invalid url!";
        header("location:change_password.php?token=$token&email=$get_email");
        exit(0);
    }
}

?>