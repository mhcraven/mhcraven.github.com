<?php
	include 'header.php';
?>

<section id="middle">
<?php

$to = htmlspecialchars ('melody_craven@yahoo.com');
$subject = htmlspecialchars ('Inquiry from Sofra website');
$message = htmlspecialchars ($_POST['message']);
$message .= "\nPhone Number: " . htmlspecialchars($_POST['phone']);
$name = htmlspecialchars ($_POST['first_name'] . $_POST['last_name']);
$from = htmlspecialchars ($_POST['email']);
$headers = "From: ". $name . " <" . $from . ">\r\n";
mail($to, $subject, $message, $headers) or die("Error!");
echo "<div class='thankYou'>Thank you for your inquiry. We will be contacting you shortly.</div>";
?>
</section>

<?php
include 'footer.php';
?>
