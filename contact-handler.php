<?php
// contact-handler.php - Place this in your website root directory

// Start output buffering to prevent header issues
ob_start();

// Check if session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// IMPORTANT: Check if PHPMailer is already loaded
if (!class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
    // Use absolute paths with require_once
    require_once __DIR__ . '/phpmailer/src/Exception.php';
    require_once __DIR__ . '/phpmailer/src/PHPMailer.php';
    require_once __DIR__ . '/phpmailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Validate required fields
    $errors = [];
    
    if (empty($_POST['your-name'])) {
        $errors[] = 'First name is required';
    }
    
    if (empty($_POST['your-last-name'])) {
        $errors[] = 'Last name is required';
    }
    
    if (empty($_POST['your-email'])) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($_POST['your-email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    if (empty($_POST['phone'])) {
        $errors[] = 'Phone number is required';
    }
    
    if (empty($_POST['case'])) {
        $errors[] = 'Case type is required';
    }

    if(empty($_POST['your-message'])) {
        $errors[] = 'Message is required';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        
        // Sanitize input data
        $receiverName = htmlspecialchars(strip_tags(trim($_POST['receiver_name'])), ENT_QUOTES, 'UTF-8');
        $receiverEmail = filter_var(trim($_POST['receiver_email']), FILTER_SANITIZE_EMAIL);

        $firstName = htmlspecialchars(strip_tags(trim($_POST['your-name'])), ENT_QUOTES, 'UTF-8');
        $lastName = htmlspecialchars(strip_tags(trim($_POST['your-last-name'])), ENT_QUOTES, 'UTF-8');
        $email = filter_var(trim($_POST['your-email']), FILTER_SANITIZE_EMAIL);
        $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])), ENT_QUOTES, 'UTF-8');
        $caseType = htmlspecialchars(strip_tags(trim($_POST['case'])), ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars(strip_tags(trim($_POST['your-message'])), ENT_QUOTES, 'UTF-8');
        
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        try {
            // Server settings - FOR TESTING WITH MAILTRAP
            $mail->SMTPDebug = 0; // Set to 2 for debugging
            $mail->isSMTP();
            $mail->Host       = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth   = true;
            $mail->Username   = '011a587122008d';
            $mail->Password   = '65b15e1a2f0e29'; // Your Mailtrap password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 2525;
            
            // Recipients
            $mail->setFrom('noreply@Stetson LLP.com', 'Stetson LLP');
            $mail->addAddress($receiverEmail, $receiverName); // WHERE TO SEND THE FORM
            $mail->addReplyTo($email, "$firstName $lastName");
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission - ' . $caseType;
            $mail->CharSet = 'UTF-8';
            
            // Email content
            $mail->Body = getEmailHTML($firstName, $lastName, $email, $phone, $caseType, $message);
            $mail->AltBody = getEmailText($firstName, $lastName, $email, $phone, $caseType, $message);
            
            // Send email
            $mail->send();
            
            // Send auto-reply to user (using the same PHPMailer instance or creating a new one properly)
            sendAutoReply($email, $firstName, $lastName);
            
            // Set success message
            $_SESSION['contact_success'] = true;
            $_SESSION['contact_message'] = 'Thank you for your message. We will contact you shortly.';
            
        } catch (Exception $e) {
            // Error handling
            $_SESSION['contact_success'] = false;
            $_SESSION['contact_message'] = "Message could not be sent. Please try again later.";
            
            // Log error for debugging
            error_log("PHPMailer Error: " . $mail->ErrorInfo);
        }
        
    } else {
        // Validation errors
        $_SESSION['contact_success'] = false;
        $_SESSION['contact_errors'] = $errors;
    }
    
    // Redirect back to form
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '#wpcf7-f1448-p825-o1');
    exit();
    
} else {
    // Not a POST request
    header('Location: index.php');
    exit();
}

/**
 * Generate HTML email
 */
function getEmailHTML($firstName, $lastName, $email, $phone, $caseType, $message) {
    return '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1a2b3c; color: white; padding: 20px; text-align: center; }
            .header h2 { margin: 0; font-size: 24px; }
            .content { background: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
            .field { margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #e9ecef; }
            .label { font-weight: bold; color: #1a2b3c; font-size: 14px; text-transform: uppercase; margin-bottom: 5px; }
            .value { color: #495057; font-size: 16px; }
            .message-box { background: #f8f9fa; padding: 20px; border-radius: 5px; margin-top: 20px; }
            .message-box .label { margin-bottom: 10px; }
            .footer { text-align: center; padding: 20px; color: #6c757d; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Contact Form Submission</h2>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">First Name</div>
                    <div class="value">' . $firstName . '</div>
                </div>
                <div class="field">
                    <div class="label">Last Name</div>
                    <div class="value">' . $lastName . '</div>
                </div>
                <div class="field">
                    <div class="label">Email</div>
                    <div class="value">' . $email . '</div>
                </div>
                <div class="field">
                    <div class="label">Phone</div>
                    <div class="value">' . $phone . '</div>
                </div>
                <div class="field">
                    <div class="label">Case Type</div>
                    <div class="value">' . $caseType . '</div>
                </div>
                <div class="message-box">
                    <div class="label">Message</div>
                    <div class="value">' . nl2br($message) . '</div>
                </div>
            </div>
            <div class="footer">
                <p>This message was sent from your website contact form.</p>
            </div>
        </div>
    </body>
    </html>
    ';
}

/**
 * Generate plain text email
 */
function getEmailText($firstName, $lastName, $email, $phone, $caseType, $message) {
    return "New Contact Form Submission\n\n" .
           "First Name: $firstName\n" .
           "Last Name: $lastName\n" .
           "Email: $email\n" .
           "Phone: $phone\n" .
           "Case Type: $caseType\n" .
           "Message: $message\n";
}

/**
 * Send auto-reply to user - FIXED: Don't re-include PHPMailer files
 */
function sendAutoReply($userEmail, $firstName, $lastName) {
    // PHPMailer is already loaded at the top of the file
    // Just use the existing PHPMailer class
    
    $mail = new PHPMailer(true);
    
    try {
        // Same SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '011a587122008d';
        $mail->Password   = '65b15e1a2f0e29'; // Your Mailtrap password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;
        
        // Recipients
        $mail->setFrom('noreply@Stetson LLP.com', 'Stetson LLP');
        $mail->addAddress($userEmail, "$firstName $lastName");
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for contacting Stetson LLP';
        $mail->Body = '
        <html>
        <body>
            <h2>Thank you for contacting us, ' . $firstName . '!</h2>
            <p>We have received your message and one of our representatives will contact you within 24 hours.</p>
            <p>If you have any urgent matters, please call us at (555) 123-4567.</p>
            <br>
            <p>Best regards,<br>Stetson LLP Team</p>
        </body>
        </html>
        ';
        $mail->AltBody = "Thank you for contacting us, $firstName! We have received your message and will contact you shortly.";
        
        $mail->send();
    } catch (Exception $e) {
        // Just log the error, don't stop main process
        error_log("Auto-reply failed: " . $mail->ErrorInfo);
    }
}

// End output buffering
ob_end_flush();
?>