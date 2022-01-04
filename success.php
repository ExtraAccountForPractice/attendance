<?php 
    $title ='Registration Successful';

    session_start();
    $e = $_SESSION['emailHelp'];
    $c = $_SESSION['phoneHelp'];

    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'db/crud.php';

    //Make a Object to call any Function of crud.php
    $crud = new crud($pdo);

    if(isset($_POST['submit'])){

        //Extract Values from the $_POST Array
        $fname = $_POST['firstname'];
        $lanme = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $e;
        $contact = $c;
        $specialty = $_POST['specialty'];
        //Call Function to Insert and Track if Success or Not
        $isSuccess = $crud->insert($fname, $lanme, $dob, $email, $contact, $specialty);

        if ($isSuccess){
            echo '<h1 class="text-center text-success">You Have Been REGISTERED!</h1>
            ';
        }
        else{
            echo '    <h1 class="text-center text-success">There was a Problem During REGISTRATION!</h1>
            ';
        }
    }
?>
    <!-- This Section of the Code is to understand the functioning of the GET vs POST methods
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php 
                //   echo $_GET['firstname'].' '.$_GET['lastname']; 
                ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">Specialty:  
                <?php 
                //    echo $_GET['specialty']; 
                ?>
            </h6>
            <p class="card-text">Date of Birth: 
                <?php 
                //    echo $_GET['dob']; 
                ?>  
            </p>
            <p class="card-text">Email: 
                <?php 
                //    echo $_GET['emailHelp']; 
                ?>  
            </p>
            <p class="card-text">Contact Number: 
                <?php 
                //    echo $_GET['phoneHelp']; 
                ?>  
            </p> 
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            
        </div>
    </div>
    -->
    <?php

    /*    echo $_GET['firstname'];
        echo $_GET['lastname'];
        echo $_GET['dob'];
        echo $_GET['specialty'];
        echo $_GET['emailHelp'];
        echo $_GET['phoneHelp'];
    */

    ?>


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">
                <?php 
                   echo $_POST['firstname'].' '.$_POST['lastname']; 
                ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">Interest:  
                <?php 
                    echo $_POST['specialty']; 
                ?>
            </h6>
            <p class="card-text">Date of Birth: 
                <?php 
                    echo $_POST['dob']; 
                ?>  
            </p>
            <p class="card-text">Email: 
                <?php 
                    echo $e; 
                ?>  
            </p>
            <p class="card-text">Contact Number: 
                <?php 
                    echo $c; 
                ?>  
            </p>
            <!-- 
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            -->
            <br><br>
        </div>
        <p></p>
    </div>


<br><br><br><br>
<?php 
    session_unset();
    session_destroy();
    require_once 'includes/footer.php'; 
?>