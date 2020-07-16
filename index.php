<html>
<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mainStyle.css">
<title>Home | Know Your Metal \m/ </title>
</head>
<body>

<table>
<tr>
  <td>Reviewer Name</td>
  <td>Stars</td>
  <td>Details</td>
</tr>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'heavymetal';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

echo '<header> 
<p class="py-4 text-center"> <img src="slogan.png" alt="slogan"> </p> </header>';

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

//echo '<div class="test" Connected successfully </div>';

$query = mysqli_query($conn, "SELECT * FROM genre")
or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
    echo"<tr'>
         <td>{$row['GenreName']}</td>
          </tr>\n";
}
mysqli_close($conn);

?>
</table>

</body>
</html>
