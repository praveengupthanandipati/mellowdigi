<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$recipient = 'info@mellowdigi.com';

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Strip line breaks from single-line fields so they can't be used for header injection.
$stripBreaks = function ($value) {
    return trim(str_replace(["\r", "\n"], ' ', $value));
};
$name    = $stripBreaks($name);
$email   = $stripBreaks($email);
$phone   = $stripBreaks($phone);
$subject = $stripBreaks($subject);

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please fill in your name, a valid email address and a message.']);
    exit;
}

$mailSubject = 'New Contact Form Enquiry' . ($subject !== '' ? ': ' . $subject : '') . ' — MellowDigi';

$body  = "You have a new message from the MellowDigi contact form.\n\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n";
$body .= 'Phone: ' . ($phone !== '' ? $phone : 'Not provided') . "\n";
$body .= 'Subject: ' . ($subject !== '' ? $subject : 'Not provided') . "\n\n";
$body .= "Message:\n{$message}\n";

$headers   = [];
$headers[] = 'From: MellowDigi Website <noreply@mellowdigi.com>';
$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$sent = @mail($recipient, $mailSubject, $body, implode("\r\n", $headers));

if ($sent) {
    echo json_encode(['success' => true, 'message' => "Thanks, {$name}! Your message has been sent. We'll get back to you within one business day."]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Something went wrong while sending your message. Please try again or email us directly at info@mellowdigi.com.']);
}
