<?php
// Include your database connection file
include('db_connection.php');

// Fetch room numbers from the database
$sql = "SELECT room_number FROM rooms";
$result = mysqli_query($connection, $sql);

if ($result) {
    $roomNumbers = array();

    // Fetch room numbers into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $roomNumbers[] = $row['room_number'];
    }

    // Convert the array to JSON and output it
    echo json_encode($roomNumbers);
} else {
    echo json_encode(array('error' => 'Error fetching room numbers: ' . mysqli_error($connection)));
}

// Close the database connection
mysqli_close($connection);
?>
