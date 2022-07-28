<?php
include "connection.php";
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab1</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
   
     $res = "<table border =`1`><tr><th>FILM</th><th>RELEASE</th><th>CARRIER</th><th>COUNTRY</th></tr>";


   
    if (isset($_GET["carrier"])) {
        $carrier = $_GET['carrier']; 
        $cursor = $collection->find(['carrier'=>$carrier]);

        foreach($cursor as $row) {
            $name = $row['title'];
            $date = $row['date'];
            $carrier = $row['carrier'];
            $film_release_country = $row['film_release_country'];
         

            $res .= "<tr><td> $name</td> <td>$date</td><td>$carrier</td><td>$film_release_country</td> </tr>";
     
        }

        $res .= "</table>";

        echo $res;
        echo "<script>localStorage.setItem('carrier1', '$res')</script>";
    }
    ?>
     </table>
</body>
<html>