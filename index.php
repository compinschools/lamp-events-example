<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Events App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Manage Events</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
        include "logic.php";
        ?>


    <div class="row">
        <?php foreach($events as $event){?>

      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-white bg-dark mt-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $event["event_name"] ?></h5>

            <p class="card-text"><?php echo $event["event_date"] ?></p>
            <p class="card-text"><?php echo $event["venue_name"] ?>
                <br />
                <?php echo $event["venue_address"] ?>
            </p>

            <p class="card-text">Tickets : <?php echo $event["venue_capacity"] ?></p>
            <p class="card-text"><?php echo $event["event_desc"] ?></p>
            <p class="card-text">Organiser<?php echo $event["organiser_name"] ?></p>
            
          </div>
        </div>
      </div>
        <?php };?>


        <div class="col-lg-4 d-flex justify-content-center">
      <div class="card text-dark bg-light mt-5" style="width: 18rem;">
        <div class="card-body">
          <form method="POST">
            <label for="eventname"> Event Name:</label><br>
            <input type="text" name="eventname"> <br><br>
            <label for="eventdate"> Event Date:</label><br>
            <input type="date" name="eventdate"> <br><br>
            <label for="eventdesc"> Event Description:</label><br>
            <input type="textarea" name="eventdesc"> <br><br>
            <label for="vid"> Venue:</label><br>
            <input type="text" name="vid"> <br><br>
            <label for="oid"> Organiser:</label><br>
            <input type="text" name="oid"> <br><br>
            <button class="btn btn-dark" name="new_event">Add Post</button>
          </form>  
        </div>
      </div>
    </div>


    </div>
    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>