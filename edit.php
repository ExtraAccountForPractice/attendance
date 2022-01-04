<?php 
    $title ='Edit';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/crud.php';

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
    
        <h1 class="text-center">Edit the Records</h1>
 
        <form method="post" action="editpost.php">
            <input type="hidden" name="id" value="<?php echo $r['attendee_id']?>"/>
            <div class="form-group">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $r['firstname'];?>" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $r['lastname'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $r['dateofbirth'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="specialty" class="form-label">Interest</label>
                    <select class="form-control" id="specialty" name="specialty" required>
                        <!--<option  value="<?php //echo $r['name'];?>" selected disabled hidden><?php echo $r['name'];?></option> -->

                <?php
                    //$crud = new crud($pdo);
                    $specialresult =$crud->getSpecialties();
                    while($sr = $specialresult->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                        <option value="<?php echo $sr['specialty_id']; ?>" <?php if($sr['specialty_id'] == $r['specialty_id']) echo "Selected";?>>
                            <?php echo $sr['name']; ?>
                        </option>
                <?php    
                    }
                ?>   
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="emailHelp" value="<?php echo $r['emailaddress'];?>" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="phone" aria-describedby="phoneHelp" name="phoneHelp" value="<?php echo $r['contactnumber'];?>" required>
                    <div id="phoneHelp" class="form-text">We'll never share your Contact Number with anyone else.</div>
                </div>
                <button onclick="return confirm('Are you Sure you want to continue to Update this Record?');" type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >Save Changes</button>
                </div>
        </form>

<?php 
    } 
?>
        <br><br><br><br>
<?php 
    require_once 'includes/footer.php'; 
?>