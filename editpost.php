<?php 
    $title ='Registration Successful';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'db/crud.php';

    //Make a Object to call any Function of crud.php
    $crud = new crud($pdo);

    if(isset($_POST['submit'])){

        //Extract Values from the $_POST Array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lanme = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['emailHelp'];
        $contact = $_POST['phoneHelp'];
        $specialty = $_POST['specialty'];
        //echo $specialty;

        $crud = new crud($pdo);
        $isSuccess = $crud->insert($fname, $lanme, $dob, $email, $contact, $specialty);
        if($isSuccess)
        {
            $result = $crud->delete($id);
            if ($result){
                //echo '<h1 class="text-center text-success">You Have Been REGISTERED!</h1>';
                
                header("Location: viewrecords.php");
            }
            else{
                echo '    <h1 class="text-center text-success">There was a Problem During UPDATION!</h1>';
            }
            
        
        }
        else
        {
        
            echo "Error";
        
        }          
    }
?>
  
<br><br><br><br>
<?php 
    require_once 'includes/footer.php'; 
?>