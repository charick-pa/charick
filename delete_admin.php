<?php
session_start();
include('db_connection.php');

$admin_id = $_GET['id']; // Get the ID from the URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Confirm button was clicked in the popup
    // Delete data
    $sql_delete = "DELETE FROM admin WHERE admin_id='$admin_id'";
    $result_delete = mysqli_query($connection, $sql_delete);

    if ($result_delete) {
        echo "<script>alert('Admin data deleted successfully!');</script>";
        // Redirect to the main admin management page or any other desired page
        header("Location: show_admin.php");
        exit();
    } else {
        echo "Error deleting admin data: " . mysqli_error($connection);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Admin Data</title>
    <style>
        /* Modal Styles */
        body{
            background: red;
        }
        .modal {
            display: none;
            position: fixed;
            top: 50%rem;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        /* Overlay Styles */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        #Delete_Admin{
            position: relative;
            margin: 20% 20px 20px 45%;
            height: 3rem;
        }
    </style>
</head>
<body>

<!-- Display a button to trigger the confirmation modal -->
<button id="Delete_Admin" onclick="openModal()">Delete Admin Data</button>

<!-- Modal -->
<div class="overlay" id="overlay"></div>
<div class="modal" id="modal">
    <p>Are you sure you want to delete this admin data?</p>
    <button onclick="confirmDelete()">Yes</button>
    <button onclick="closeModal()">No</button>
</div>

<!-- Add a form to handle the actual deletion -->
<form id="deleteForm" method="post" style="display: none;">
    <!-- Add any hidden fields you need for the deletion process -->
    <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
</form>

<!-- JavaScript to handle modal functionality -->
<script>
    function openModal() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('modal').style.display = 'none';
        // Redirect to the index page
        window.location.href = 'show_admin.php';
    }

    function confirmDelete() {
        document.getElementById('deleteForm').submit();
    }
</script>

</body>
</html>
