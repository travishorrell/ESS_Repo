
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
</body>
</html>

<?php
//Database Connection Varaibles
$servername = "localhost";
$username = "root";
$password = "root";
$DatabaseName = "ESS_DataBase";

//Connection to the database
$connectionObject = new mysqli($servername, $username, $password, $DatabaseName);

//Checks if the connection returns an error
if($connectionObject->connect_error){
    die("Connection Failed" . $connectionObject->connect_error);
}
echo "Connected successfully" . "<br>";

$sql = "Select * FROM TestData";
$result = $connectionObject->query($sql);

if($result->num_rows)
{
    while($row = $result->fetch_assoc())
    {
        echo "ID: " . $row["ID"]. " - First Name: " . $row["FirstName"]. " - Last Name: " . $row["LastName"] . " - Image: " . $row["UserImage"] . "<br>";
    }
}
else{
    echo "0 Result";
}

$connectionObject->close();

?>