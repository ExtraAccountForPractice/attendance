<?php 
    $title ='Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/crud.php';
    //require_once 'db/credential.php';
    //require_once 'PHPMailerAutoload.php';

    //Make a Object to call any Function of crud.php
    $crud = new crud($pdo);
    $results =$crud->getSpecialties();
?>

        <h3 class="text-center" style="font-family: 'Oswald', sans-serif;"><b>E-Mail and Phone Verification</b></h3>
        
        <!--
            - First Name
            - Last Name
            - Date of Birthday
            - Speciality (Database Admin, Software Developer, Web Administer, Others)
            - Email Address
            - Contact Number
        -->

 
        <form method="post" action="validate.php">
            <div class="form-group">
                <div class="mb-3">
                    <label for="Email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="phone" aria-describedby="phoneHelp" name="phoneHelp" min="6000000000" max="9999999999" required>
                    <div id="phoneHelp" class="form-text">We'll never share your Contact Number with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >GENERATE OTP</button>
            </div>
        </form>
        <br><br><br><br>
        
        <script>
            function ValidateEmail()
            {
                var inputText = document.getElementById("Email").form.id;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(inputText.value.match(mailformat))
                {
                    alert("Valid email address!");
                    document.form1.text1.focus();
                    return true;
                }
                else
                {
                    alert("You have entered an invalid email address!");
                    document.form1.text1.focus();
                    return false;
                }
            }
        </script>


<?php 
    require_once 'includes/footer.php'; 
?>
