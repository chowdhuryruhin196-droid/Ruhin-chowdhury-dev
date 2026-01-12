<?php
// Email configuration
$recipient_email = "chowdhuryruhin196@gmail.com";
$website_name = "Ruhin's Web Development Portfolio";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $company = htmlspecialchars(trim($_POST['company']));
    $project_type = htmlspecialchars(trim($_POST['project-type']));
    $budget = htmlspecialchars(trim($_POST['budget']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validate required fields
    if (empty($name) || !$email || empty($project_type) || empty($budget) || empty($message)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
        exit;
    }
    
    // Prepare email content
    $email_subject = "New Contact Form Submission from $name";
    
    $email_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
            .header { background: #2563eb; color: white; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
            .content { background: white; padding: 20px; border-radius: 5px; }
            .field { margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px; }
            .label { font-weight: bold; color: #2563eb; }
            .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Message from $website_name Contact Form</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span><br>
                    $name
                </div>
                
                <div class='field'>
                    <span class='label'>Email:</span><br>
                    <a href='mailto:$email'>$email</a>
                </div>
    ";
    
    if (!empty($phone)) {
        $email_body .= "
                <div class='field'>
                    <span class='label'>Phone:</span><br>
                    $phone
                </div>
        ";
    }
    
    if (!empty($company)) {
        $email_body .= "
                <div class='field'>
                    <span class='label'>Company/Business:</span><br>
                    $company
                </div>
        ";
    }
    
    $email_body .= "
                <div class='field'>
                    <span class='label'>Project Type:</span><br>
                    $project_type
                </div>
                
                <div class='field'>
                    <span class='label'>Budget Range:</span><br>
                    $budget
                </div>
                
                <div class='field'>
                    <span class='label'>Project Description:</span><br>
                    " . nl2br($message) . "
                </div>
            </div>
            <div class='footer'>
                <p>This message was sent from your portfolio website. Reply to $email to contact the sender.</p>
                <p>Submission Date: " . date('Y-m-d H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Send email
    $mail_sent = mail($recipient_email, $email_subject, $email_body, $headers);
    
    if ($mail_sent) {
        // Send confirmation email to customer
        $confirmation_subject = "We received your message - " . $website_name;
        $confirmation_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
                .header { background: #2563eb; color: white; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
                .content { background: white; padding: 20px; border-radius: 5px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Message Received!</h2>
                </div>
                <div class='content'>
                    <p>Hi $name,</p>
                    <p>Thank you for reaching out! I've received your message and will get back to you within 24 hours.</p>
                    <p><strong>Your message details:</strong></p>
                    <ul>
                        <li><strong>Email:</strong> $email</li>
                        <li><strong>Project Type:</strong> $project_type</li>
                        <li><strong>Budget Range:</strong> $budget</li>
                    </ul>
                    <p>I'm excited to discuss your project with you!</p>
                    <p>Best regards,<br>Ruhin Chowdhury<br>Web Developer</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        $confirmation_headers = "MIME-Version: 1.0" . "\r\n";
        $confirmation_headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $confirmation_headers .= "From: " . $recipient_email . "\r\n";
        
        mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);
        
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Message sent successfully! Check your email for confirmation.']);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
