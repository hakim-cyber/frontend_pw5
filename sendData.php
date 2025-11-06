<?php
// Display submitted form data nicely formatted

echo "<pre>";        // Start preformatted text block
print_r($_POST);      // Print the POST array (all form data)
echo "</pre>";        // Close pre block
?>