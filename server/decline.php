<?php
session_start();
include '../includes/db_connection.php';

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$user_id = $_GET["id"];
$app_id = $_GET["app_id"];
$reason = $_POST['reason'];


$sql = "update application SET status = 'declined' WHERE user_id = $user_id;";
$result = mysqli_query($con, $sql);

    if ($result) {

      $insert_reason = mysqli_query($con, "insert into reasons(reason, app_id) values('$reason', $app_id)");

      if($insert_reason){
        $get_email = mysqli_query($con, "select email from users where id = $user_id;");
          $email = $get_email->fetch_row();
          

          //Create instance of PHPMailer
          $mail = new PHPMailer();
            
          //Set mailer to use smtp
          $mail->isSMTP();
        
          //$mail->SMTPDebug = 3;

          //Define smtp host
          $mail->Host = "smtp.gmail.com";
    
          //Enable smtp authentication
          $mail->SMTPAuth = true;
      
          //Set smtp encryption type (ssl/tls)
          $mail->SMTPSecure = "tls";
    
          //Port to connect smtp
          $mail->Port = "587";


          //Set email     
          $mail->Username = "dlearning.wmsu@gmail.com";
          
          //Set gmail password
          $mail->Password = "dlearningwmsu1";
    
          $mail->setFrom('dlearning.wmsu@gmail.com');
          $mail->FromName = "Distance Learning WMSU";

          //Enable HTML              
          $mail->isHTML(true);
            
          $mail->Subject = "Application declined! Your application has been declined.";
                        
          //Email bsody
          $mail->Body = "<h4>We're sorry to tell you that your application for      Distance Learning Education has been declined.</h4>
                         <p>
                         Reason: <br>
                         .$reason.

                         <br>
                         <br>
                         <br>
                         For more info, visit <a href='http://wmsu.edu.ph/'>wmsu.dle.com</a>
                         </p>";
    
          //Add recipient
          $mail->addAddress("$email[0]");

          //Address to which recipient will reply
          $mail->addReplyTo("distance.learning.wmsu@gmail.com", "Reply");

          //Provide file path and name of the attachments
          // $mail->addAttachment("file.txt", "File.txt");        
          // $mail->addAttachment("images/profile.png"); //Filename is optional
            
                       
          if($mail->send()){
              header("location: ../admin/view-answers.php?id=$user_id&message=success");
          }
      }
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }

?>