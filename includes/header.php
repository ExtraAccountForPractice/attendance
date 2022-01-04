<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link rel="stylesheet" href="css/site.css" />

    <!-- Google Front  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald:wght@300&display=swap" rel="stylesheet">


    <title>Verification <?php echo $title ?></title>
  </head>
  <body>
    
      <!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">IMS MEGA EVENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="viewrecords.php">View Attendees</a>
          </div>
        </div>
      </nav> -->
      
      <!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand text-center" href="#">IMS MEGA EVENT</a>
      </nav> -->

    <div class="header" id="myHeader">
        <h2 style="font-family: 'Lora', serif;">IMS MEGA EVENT</h2>
    </div>
    <style>
      /* Style the header */
      .header {
        padding: 10px 16px;
        background: #3399ff;
        color: #f1f1f1;
        text-align: center;
      }

      /* Page content */
      .content {
        padding: 16px;
      }

      /* The sticky class is added to the header with JS when it reaches its scroll position */
      .sticky {
        position: fixed;
        top: 0;
        width: 100%
      }

      /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
      .sticky + .content {
        padding-top: 102px;
      }
    </style>

    <script>
      // When the user scrolls the page, execute myFunction
      window.onscroll = function() {myFunction()};

      // Get the header
      var header = document.getElementById("myHeader");

      // Get the offset position of the navbar
      var sticky = header.offsetTop;

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    </script>
  <div class="container">
    </br></br>
