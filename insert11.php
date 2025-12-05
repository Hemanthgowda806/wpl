<?php
    $conn=mysqli_connect("localhos","root"," ","demo");

    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    $sql="CREATE TABLE IF NOT EXISTS people(
    id INT AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(50),AGE INT
    )";

    mysqli_query($conn,$sql);
    $name=$_POST['name'];
    $age=$_POST['age'];

    if(!empty($name) && !empty($age)){
        $insert="INSERT IINTO people(name,age)
        VALUES('$name','$age')";
        mysqli_query($conn,$insert);
    }

    $result=mysqli_query($conn,"SELECT * FROM people");

    echo "<h2> people table</h2>";
    echo "<table border='1'>
    <tr><th>ID</th><th.>name</th.<th>age</th></tr>";

    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
            <td> {$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            </tr>";

    }
    echo "</table>";
    mysqli_close($conn);
    ?>