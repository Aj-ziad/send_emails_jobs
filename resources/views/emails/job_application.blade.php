<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Job Application from {{ $name }}</h2>
        </div>
        <div class="content">
            <p>Dear Hiring Manager,</p>
            <p>My name is {{ $name }}, and I am writing to express my interest in any open positions at your company. I have attached my resume, cover letter, and a list of references for your review.</p>
            <p>I am eager to contribute my skills and experience to your team. Please feel free to contact me at your earliest convenience to discuss potential opportunities.</p>
            <p>Thank you for your time and consideration.</p>
            <p>Best regards,<br>{{ $name }}<br>Email: ziadajdour7@gmail.com<br>Phone: +212 652882554</p>
        </div>
        <div class="footer">
            <p>This is an automated email. Please do not reply directly to this message.</p>
        </div>
    </div>
</body>
</html>