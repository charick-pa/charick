<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the score from the form
    $score = isset($_POST['score']) ? (int)$_POST['score'] : 0;

    // Calculate grade based on the score
    if ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // Display the result
    echo "<h2>Your Grade is: $grade</h2>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <!-- <link rel="stylesheet" href="path/to/output.css"> -->
    <!-- <link rel="stylesheet" href="styles/callgrade.css">  -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container-form">
    <form class="" action=""method="post">
        <label for="score">Enter your score:</label>
        <input type="text" name="score" required>
        <button class="" type="submit">Calculate Grade</button>
    </form>
</div>
</body>
</html>
