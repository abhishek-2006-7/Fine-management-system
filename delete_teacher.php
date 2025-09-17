<?php
// Start the session to store a success message
session_start();

// Including the database connection file
include_once("header.php");
$conn = mysqli_connect("localhost", "root", "password", "fine_type");

// Check if the 'name_of_teacher' parameter is provided in the URL
if (isset($_GET['name_of_teacher'])) {
    // Get the name of the teacher to delete
    $name = $_GET['name_of_teacher'];

    // Prepare SQL query to delete the teacher record with a prepared statement
    $stmt = $conn->prepare("DELETE FROM teacher_reg WHERE name_of_teacher = ?");
    $stmt->bind_param("s", $name); // "s" stands for the string type of the parameter

    // Execute the query
    if ($stmt->execute()) {
        // Set a session message indicating success
         echo"<script>
   		alert('Delete Successfully');
   		window.location='main.php'
         </script>";
     
   // Ensure the script stops here after the redirection
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>

