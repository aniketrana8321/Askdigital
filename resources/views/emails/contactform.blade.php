<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Message from Ask Digital Agency Contact Form</title>
</head>
<body>
    <h2 style="color: #2c3e50;">📩 New Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>

    <hr>
    <p style="font-size: 12px; color: #888;">
        This message was submitted via the <a href="https://askdigitalagency.com/contact-us">Contact Us</a> form on <strong>Ask Digital Agency</strong>.
    </p>
</body>
</html>
