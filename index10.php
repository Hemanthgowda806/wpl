


<html>
    <head>
    <title>Student DAshboard</title>
</head>

<body>
  <h2>Student dashboard</h2>

  <form method="post">
    <label for="sort">sort by name</label>
    <select name="sort" id="sort">
        <option value="asc">Ascending (A-Z)</option>
        <option value="desc">Descending (Z-A)</option>
    </select>
    <input type="submit" value="sort">
  </form>

  <?php

  $students=array(
    "Hemanth Gowda" => "IQ",
    "Santhosh JR" => "wizard",
    "Roshan" => "hobbit"
  );

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $choice=$_POST["sort"];

    if($choice=="asc"){
        ksort($students);
    }else{
        krsort($students);
    }
  }

  echo"<h3>Sorted Student List: <h3>";
  echo "<table border='1' cellpadding='5'>";
  echo "<tr><th>Student Name</th><th>Description</th></tr>";

  foreach($students as $name => $desc){
    echo "<tr><td>$name</td><td>$desc</td></tr>";
  }

  echo "</table>"

  ?>
</body>
</html>