<?php 
    $title ='View Records';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    require_once 'db/crud.php';

    //Make a Object to call any Function of crud.php
    $crud = new crud($pdo);
    $results = $crud->getAttendees();
?>


    <table class="table">
        <thead class="thead-dark table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        <!--<th scope="col">Date of Birth</th>
            <th scope="col">Email Address</th>
            <th scope="col">Contact</th> -->
            <th scope="col">Interest</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
<?php
    while($r = $results->fetch(PDO::FETCH_ASSOC))
    { ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $r['attendee_id']; ?></th>
                <td><?php echo $r['firstname']; ?></td>
                <td><?php echo $r['lastname']; ?></td>
            <!--<td><?php //echo $r['dateofbirth']; ?></td>
                <td class="bg-warning"><?php //echo $r['emailaddress']; ?></td>
                <td class="bg-info"><?php //echo $r['contactnumber']; ?></td>-->
                <td><?php echo $r['name']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-primary" value="View">View</a>
                    <a onclick="return confirm('Are you Sure you want to continue to Update this Record?');" href="edit.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-warning" value="Edit">Edit</a>
                    <a onclick="return confirm('Are you Sure you want to continue to Delete this Record?');" href="delete.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger" value="Delete">Delete</a>
                </td>
            </tr>
        </tbody>
    
<?php 
    } 
?>
    
    </table>







<br><br><br><br>
<?php 
    require_once 'includes/footer.php'; 
?>