<?php 
    $title ='Direct Registration';

    /*session_start();
    $e = $_SESSION['emailHelp'];
    $c = $_SESSION['phoneHelp'];*/

    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/crud.php';

    //Make a Object to call any Function of crud.php
    $crud = new crud($pdo);
    $results =$crud->getSpecialties();
?>
    
        <h3 class="text-center" style="font-family: 'Oswald', sans-serif;"><b>REGISTRATION FOR MEGA EVENT</b></h3>

        <!--
            - First Name
            - Last Name
            - Date of Birthday
            - Speciality (Database Admin, Software Developer, Web Administer, Others)
            - Email Address
            - Contact Number
        -->

 
        <form method="post" action="success2.php">
            <div class="form-group">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="mb-3">
                    <label for="specialty" class="form-label">Interest</label>
                    <select class="form-control" id="specialty" name="specialty" required>
                        <option value="" selected disabled hidden>Select an Option</option>

                <?php
                    while($r = $results->fetch(PDO::FETCH_ASSOC))
                    {
                ?>
                        <option value="<?php echo $r['specialty_id']; ?>"><?php echo $r['name']; ?></option>
                <?php    
                    }
                ?>

                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email Address</label>
                    <input type="email" class="form-control text-success" id="Email" aria-describedby="emailHelp" name="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Contact Number</label>
                    <input type="number" class="form-control text-success" id="phone" aria-describedby="phoneHelp" name="phoneHelp" required>
                    <div id="phoneHelp" class="form-text">We'll never share your Contact Number with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >Submit</button>
                </div>
        </form>
        <br><br><br><br>
<?php 
    require_once 'includes/footer.php'; 
?>