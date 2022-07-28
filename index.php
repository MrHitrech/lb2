<?php 

include 'connection.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Lab2</title>
    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onload="lc_stor_show()">
<div class="container">

<form action="actor.php" method="GET">
<a>actor film:</a>
    <select name='actor'>
    <?php
        
        $cursor = $collection->distinct("actor");

        foreach ($cursor as $row) {
            print "<option>$row</option>";
        }
        
    ?>
    </select>
    <input type="submit" value="search">
</form>



<form action="carrier.php" method="GET">
<a>carrier:</a>
    <select name='carrier'>
    <?php
        $cursor = $collection->distinct('carrier');
       
        foreach ($cursor as $row) {
            echo "<option>$row</option>";
        }
    ?>
    </select>
    <input type="submit" value="search">
</form>


<form action="release_new_date.php" method="GET">
    <a>release new date:</a>

    <input type="submit" value="search">

</form>
</div>

    <div id="res"> </div>

    <div id="res1"> </div>

    <div id="res2"> </div>

</body>

</html>