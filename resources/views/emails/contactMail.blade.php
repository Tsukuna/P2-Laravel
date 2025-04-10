<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        /* Email-specific CSS (inlined for best compatibility) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            margin-bottom: 16px;
        }
        strong {
            color: #292D74;
        }
        .message-box {
            padding: 15px;
            background-color: #e2e2e2;
            border-radius: 8px;
            margin-top: 20px;
            border: 1px solid #d4d4d4;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #7f8c8d;
            font-size: 0.9em;
        }

        /* Responsive Styles (for mobile) */
        @media screen and (max-width: 600px) {
            .container {
                padding: 15px;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Service:</strong> {{ $contact->service }}</p>
        <p><strong>Message:</strong></p>
        <div class="message-box">
            {{ $contact->message }}
        </div>
        <div class="footer">
            <p>© 2025, Prestige Passenger</p>
        </div>
    </div>
</body>
</html>
