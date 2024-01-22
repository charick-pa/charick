<?php
session_start();
include('db_connection.php');
// if ( ! empty( $_SESSION['username'] ) ) {
//     header('Location:index.php');
//     exit;
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data and insert into the admin table
    $admin_name = $_POST['admin_name'];
    $admin_lastname = $_POST['admin_lastname'];
    $admin_age = $_POST['admin_age'];
    $admin_email = $_POST['admin_email'];
    $admin_address = $_POST['admin_address'];

    // Perform validation on form data if necessary

    $sql = "INSERT INTO admin (admin_name, admin_lastname, admin_age, admin_email, admin_address) 
            VALUES ('$admin_name', '$admin_lastname', '$admin_age', '$admin_email', '$admin_address')";
    
    // echo "<script>console.log('SQL Query: " . addslashes($sql) . "');</script>";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        // echo "<script>console.log('$result');</script>";
        // echo "<script>console.log('Result: Success');</script>";
         echo "<script>alert('Admin data inserted successfully!');</script>";
        // echo "Admin data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Admin Data</title>
    <style type="text/css">
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <div class="container-form">
        <h2>Insert Admin Data</h2>
        
        <!-- Insert Admin Data Form -->
        <form action="" method="post">
            <label for="admin_name">Name:</label>
            <input type="text" name="admin_name" required><br>

            <label for="admin_lastname">Lastname:</label>
            <input type="text" name="admin_lastname" required><br>

            <label for="admin_age">Age:</label>
            <input type="number" name="admin_age" required><br>

            <label for="admin_email">Email:</label>
            <input type="email" name="admin_email" required><br>

            <label for="admin_address">Address:</label>
            <input type="text" name="admin_address" required><br>

            <input type="submit" value="Insert Admin Data">
        </form>

        <!-- Link to Logout -->
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
