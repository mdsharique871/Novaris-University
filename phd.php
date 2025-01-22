<?php
// Form fields
$name = $_POST['name'];
$email = $_POST['email'];
$research = $_POST['research'];
$degree = $_POST['degree'];

// Email settings
$to = "Sharkworld9@gmail.com"; // Replace with your email
$subject = "New PhD Application Submission";

// Message
$message = "
    <html>
    <head>
        <title>New PhD Application</title>
    </head>
    <body>
        <h2>New PhD Application Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Research Interests:</strong><br> $research</p>
        <p><strong>Previous Degree:</strong> $degree</p>
    </body>
    </html>
";

// Headers for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

// Additional headers
$headers .= "From: no-reply@yourwebsite.com" . "\r\n"; // From email (optional)
$headers .= "Reply-To: $email" . "\r\n"; // Reply-to email

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Your application has been submitted successfully!";
} else {
    echo "Sorry, there was an issue submitting your application. Please try again later.";
}
?>
