<!-- <?php
$name = $_POST['name'];
$visitor_email; = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'infoloretel@gmail.com';

$email_subject = 'New form submission';

$email_body= "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n".
              "User Message: $message.\n";

$to = 'deepanshubisht330@gmail.com'

$headers = "Form: $email_form \r\n";

$headers .= "Reply To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");


?> -->