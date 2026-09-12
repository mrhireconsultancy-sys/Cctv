<?php
// contact.php — handles the quote request form submission
header('Content-Type: application/json');

$toEmail = "info@secureviewcctv.in"; // change to your real inbox

function respond($ok, $msg) {
    echo json_encode(["success" => $ok, "message" => $msg]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, "Invalid request method.");
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $phone === '' || $email === '' || $message === '') {
    respond(false, "Please fill in all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, "Please enter a valid email address.");
}

// Sanitize for email headers / storage
$name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$subject = "New CCTV Quote Request from $name";
$body    = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message\n";
$headers = "From: no-reply@secureviewcctv.in\r\nReply-To: $email\r\n";

// Attempt to send mail (requires a configured mail server / SMTP relay)
$sent = @mail($toEmail, $subject, $body, $headers);

// Always log the lead to a local file as a fallback, even if mail() succeeds
$logLine = date('Y-m-d H:i:s') . " | $name | $phone | $email | " . str_replace(["\r", "\n"], ' ', $message) . PHP_EOL;
@file_put_contents(__DIR__ . '/leads.log', $logLine, FILE_APPEND | LOCK_EX);

if ($sent) {
    respond(true, "Thanks! We'll call you shortly to schedule your free survey.");
} else {
    // Mail may fail in local/dev environments without SMTP configured — lead is still logged
    respond(true, "Request received — saved to our system. We'll be in touch shortly.");
}
