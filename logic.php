<?php

    include 'dbcon.php';
        
        $sql = "SELECT * FROM events 
        LEFT JOIN venues on events.venue_id  = venues.venue_id 
        LEFT JOIN organisers on organisers.organiser_id = events.organiser_id";
        $events = $conn->query($sql);


        if(isset($_REQUEST['new_event'])){
            $name = $_REQUEST['eventname'];
            $date = $_REQUEST['eventdate'];
            $desc = $_REQUEST['eventdesc'];
            $vid = $_REQUEST['vid'];
            $oid = $_REQUEST['oid']; 
        
         
        
            $insert = "INSERT INTO events(event_name, event_date, event_desc, venue_id, organiser_id) 
            VALUES('$name', '$date', '$desc', '$vid', '$oid')";
        
        if ($conn->query($insert) === TRUE) {
            echo "New record created successfully";
            header("Location: index.php");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
            

        }






        $conn->close();
    ?>