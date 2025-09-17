<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "password", "fine_type");

// Check if the form has been submitted
if (isset($_POST['mark_paid'])) {
    // Get the student ID from the hidden input field
    $student_id = $_POST['id'];

    // Update the payment status to 'Paid'
    $update_query = "UPDATE main SET status = 'Paid' WHERE id = '$student_id'";
    // Execute the query
    if (mysqli_query($conn, $update_query)) {
        // Redirect back to the main page with success message
        echo "<script>
                alert('Payment status updated to Paid');
                window.location = 'main.php'; // Redirect back to the same page
              </script>";
    } else {
        // Handle query error
        echo "<script>
                alert('Failed to update payment status');
                window.location = 'main.php'; // Redirect back to the same page
              </script>";
    }
}
?>

