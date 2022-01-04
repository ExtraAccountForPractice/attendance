<?php 
    $title ='Validate';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/credential.php';
    //require_once 'db/crud.php';

    //Make a Object to call any Function of crud.php
    //$crud = new crud($pdo);
    //$results =$crud->getSpecialties();
    
    $email = $_POST['emailHelp'];
    $phone = $_POST['phoneHelp'];

    session_start();
    $_SESSION['emailHelp'] = $email;
    $_SESSION['phoneHelp'] = $phone;


?>

<?php
    
    //$to = "shubhamchandra235@gmail.com";
    $to = $email;
    $subject = "IMS MEGA EVENT REGISTRATION OTP";
    $opt = $phone/55555;
    settype( $opt, "integer" );
    
    $message = "
        <html>
            <head>
                <title>Registration OTP IMS MEGA EVENT</title>
            </head>
            <body>
                <p>This Email contains Instructions for your OTP!</p>
                <table class='table'>
                    <br>
                    <tr scope='row'>
                    <td>Code is:-  </td>
                    <td><b>$opt</b></td>
                    </tr>
                    </table>
                <p>
                    <b>OTP = CODE + Mobile Number</b><br><br>
                    Example:- Your Entered Mobile Number is:- <b>9900000000</b><br><br>
                    and Your Code is:- <b>45826</b><br><br>
                <center>Therefore, your <b>OTP</b> is:-<br><b> 9900000000 + 45826 = 9900045826</b><br></center>
                </p>    
            </body>
        </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: IMS MEGA EVENT' . "\r\n";
    $headers .= 'Cc: imbidexter235@gmail.com.com' . "\r\n";

    mail($to,$subject,$message,$headers);

?>
        <h1 class="text-center text-success"><b>Check Your E-Mail for OTP!!!!</b></h1><br><br>
    
        <h3 class="text-center">EMail and Phone Verification</h3>

 
        <form method="post" action="otp.php">
            <div class="form-group">
                <div class="mb-3">
                    <label for="otp" class="form-label">Enter your OPT</label>
                    <input type="number" class="form-control" id="otp" name="otp" required>
                </div>
                <!--<div class="mb-3">
                    <label for="phone" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="phone" aria-describedby="phoneHelp" name="phoneHelp" required>
                    <div id="phoneHelp" class="form-text">We'll never share your Contact Number with anyone else.</div>
                </div> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >Submit OTP</button>
            </div>
        </form>
        <br><br><br><br>


<?php 
    require_once 'includes/footer.php'; 
?>
