<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<style>
    table,
    tr,
    th,
    td {
        font-size: 20px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <h2>User Form</h2>

    <form method="post" action="./send12.php">
        Name: <input type="text" name="name" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="submit">
    </form>

    <br><br>
    <table>
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Email</th>
        </tr>

        <?php

        $conn = new mysqli("localhost", "root", "", "demo");

        if ($conn->connect_error) {
            die("connection failed" . $conn->connect_error);
        }
        $sql = "SELECT name,address,email from users order by name";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['address'] . "</td>
            <td>" . $row['email'] . "</td>
        </tr>";
            }


        }

        $conn->close();
        ?>
    </table>
</body>

</html>