<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e1e1e1; border-radius: 8px; }
        .header { background-color: #0d1b2a; color: #ad8b24; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 30px; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #0d1b2a; display: block; margin-bottom: 5px; text-transform: uppercase; font-size: 12px; }
        .value { background-color: #f9f9f9; padding: 10px; border-radius: 4px; display: block; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Submission</h1>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">First Name</span>
                <span class="value">{{ $submission['first_name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Last Name</span>
                <span class="value">{{ $submission['last_name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Email Address</span>
                <span class="value">{{ $submission['email'] }}</span>
            </div>
            <div class="field">
                <span class="label">Phone Number</span>
                <span class="value">{{ $submission['phone'] }}</span>
            </div>
            <div class="field">
                <span class="label">Message</span>
                <span class="value">{!! nl2br(e($submission['message'])) !!}</span>
            </div>
            <div class="field">
                <span class="label">SMS Consent</span>
                <span class="value">{{ $submission['sms_consent'] }}</span>
            </div>
        </div>
        <div class="footer">
            <p>This email was sent from the Alar Chauffeur Service contact form.</p>
        </div>
    </div>
</body>
</html>
