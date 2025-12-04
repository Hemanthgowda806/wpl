<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Last Visited time on the Webpage</h2>
    <?php
    date_default_timezone_set('Asia/kolkata');
    $intm=60*60*24*60+time();
    setcookie('LastVisit',date("h:i:sA-d/m/Y"),$intm);

    if(isset($_COOKIE['LastVisit'])){
        $visit=$_COOKIE['LastVisit'];
        echo "your last visit was- ".$visit;
    }else
        echo "you have not visited this website before"
    ?>
</body>
</html>