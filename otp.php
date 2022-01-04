<?php
    session_start();

    $e = $_SESSION['emailHelp'];

    $otp = $_POST['otp'];
    
    $c = $_SESSION['phoneHelp'];
    //echo $c;
    //echo "<br>";
    settype( $c, "integer" );
    //echo $c;
    //echo "<br>";
    $g = $c/55555;
    settype( $g, "integer" );
    $g = $g + $c;
    //echo $e;
    //echo $c;
    //echo $otp;
    //echo "<br>";
    //echo $g;
    if ($otp == $g)
    {
        header("Location: registration.php");
    }
    else
    {
        session_unset();
        session_destroy();
        echo "alert('Your OPT was Wrong - Restart Your Registration Process')";
        header("Location: restart.php");
    }
?>