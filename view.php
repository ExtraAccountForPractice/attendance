<?php 
    $title ='View Rocord';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/crud.php';

    
    // Get Attendee by ID
    if(!isset($_GET['id']))
    {
        echo "<h1 class='text-danger'>Please Check the Details and Try Again</h1>";
    }
    else
    {
        $id = $_GET['id'];
        //echo $id;
        //Make a Object to call any Function of crud.php
        $crud = new crud($pdo);
        $results =$crud->getAttendeeDetails($id);
        $r = $results->fetch(PDO::FETCH_ASSOC);
        
?>

    <!-- Get all the Values/Detials as per the Attendee_ID
    This Section of the Code is to understand the functioning of the GET vs POST methods -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php 
                echo $r['firstname'].' '.$r['lastname']; 
                ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">Interest:  
                <?php
                    //Technique 1
                    //$specialtyresult =$crud->getAttendees();
                    //$sr = $specialtyresult->fetch(PDO::FETCH_ASSOC);

                    /* Technique 2 - Inner Joint + Where Command */echo $r['name'];
                ?>
            </h6>
            <p class="card-text">Date of Birth: 
                <?php 
                    echo $r['dateofbirth']; 
                ?>  
            </p>
            <p class="card-text">Email: 
                <?php 
                    echo $r['emailaddress']; 
                ?>  
            </p>
            <p class="card-text">Contact Number: 
                <?php 
                    echo $r['contactnumber']; 
                ?>  
            </p> 
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
            
        </div></br>
        <th>
            <a href="viewrecords.php" class="btn btn-primary" value="View">Back to List</a></br>
            <a onclick="return confirm('Are you Sure you want to continue to Update this Record?');" href="edit.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-warning" value="Edit">Edit</a></br>
            <a onclick="return confirm('Are you Sure you want to continue to Delete this Record?');" href="delete.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger" value="Delete">Delete</a></br>
        </th>
    </div>
<?php 
    } 
?>
                

<br><br><br><br>
<?php 
    require_once 'includes/footer.php'; 
?>