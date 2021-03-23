<?php 

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$phone = filter_input(INPUT_POST, 'phone');
$people = filter_input(INPUT_POST, 'people');
$time = filter_input(INPUT_POST, 'time');

$host = "localhost";
$dbusername = "zumanex_admin";
$dbpassword = "vbtYN566nrF";
$dbname = "zumanex_reservations";

//Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die ('Connect Error ('.mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else {
    $sql = "INSERT INTO bookings (firstname, lastname, phone, people, time)
    values ('$firstname', '$lastname', '$phone', '$people', '$time')";
    if ($conn->query($sql)){
        echo "Hi $firstname, your booking for a table of <b>$people</b> person(s) at <b>$time</b> has been submitted successfully.";
        echo "<br>";
        echo "<br>";
        echo "You may now close this tab or go back to another page on our website.";
    }
    else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<?php include 'navigation.php'?>