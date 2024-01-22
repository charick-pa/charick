<?php
// Fetch admin data based on pagination
session_start();
include('db_connection.php');
include('check_permission.php');

// Function to fetch admin data for the current page
function fetchAdminDataPaginated($connection, $page, $rowsPerPage) {
    $offset = ($page - 1) * $rowsPerPage;
    $sql_fetch_paginated = "SELECT * FROM admin LIMIT $offset, $rowsPerPage";
    $result_fetch_paginated = mysqli_query($connection, $sql_fetch_paginated);

    $admin_data = array();

    if ($result_fetch_paginated) {
        while ($row = mysqli_fetch_assoc($result_fetch_paginated)) {
            $admin_data[] = $row;
        }
    } else {
        // Log the error instead of echoing directly
        error_log("Error fetching admin data: " . mysqli_error($connection));
    }

    return $admin_data;
}

// Number of rows to display per page
$rowsPerPage = 10;

// Get the current page, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Fetch admin data for the current page
$admin_data = fetchAdminDataPaginated($connection, $page, $rowsPerPage);
?>

<style type="text/css">
    <?php include 'showadmin.css'; ?>
    <?php include 'header.css'; ?>
</style>

<!-- Display Admin Data Table -->
<?php include 'components/header.php'; ?>
<div class="container">
    <h3>Admin Data</h3>
    <p><a class="insert-button" href="insert_admin.php">Insert</a></p>
    <table>
        <tr>
            <th>Number</th>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($admin_data as $index => $admin) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $admin['admin_id']; ?></td>
                <td><?php echo $admin['admin_name']; ?></td>
                <td><?php echo $admin['admin_lastname']; ?></td>
                <td><?php echo $admin['admin_age']; ?></td>
                <td><?php echo $admin['admin_email']; ?></td>
                <td><?php echo $admin['admin_address']; ?></td>
                <td>
                    <a class="link" href="update_admin.php?id=<?php echo $admin['admin_id']; ?>">Update</a>
                    <a class="link" href="delete_admin.php?id=<?php echo $admin['admin_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
        <?php
        // Calculate total number of pages
        $sql_count_rows = "SELECT COUNT(*) FROM admin";
        $result_count_rows = mysqli_query($connection, $sql_count_rows);
        $totalRows = $result_count_rows ? mysqli_fetch_array($result_count_rows)[0] : 0;
        $totalPages = ceil($totalRows / $rowsPerPage);

        // Display pagination links
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a  href='?page=$i'>$i</a> ";
        }
        ?>
        <p><a href="logout.php">Logout </a> <a href="authenticate.php">authenticate</a></p>
    </div>
</div>
