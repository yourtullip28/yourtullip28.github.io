<?php
    $Place = $_POST['Place'];
    $Count = $_POST['Count'];
    $Date = $_POST['Date'];
    $Recommendation = $_POST['Recommendation'];

       //Database connection
       $conn = new mysqli('localhost','root','','connect');
       if($conn->connect_error){
           die('Connection Failed : ' .$conn->connect_error);
       }
       else{
           $stmt = $conn->prepare("insert into form(Place, Count, Date, Recommendation) values(?,?,?,?)");
   
           $stmt->bind_param("siis", $Place, $Count, $Date, $Recommendation);
           $stmt->execute();
           echo '<script>alert.("You have submitted Successfully!")<script>';
           $stmt->close();
           $conn->close();
       }

?>