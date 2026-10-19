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
            <h1>New Free Quote</h1>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name</span>
                <span class="value">{{ $data['name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Phone</span>
                <span class="value">{{ $data['number'] }}</span>
            </div>
            <div class="field">
                <span class="label">Email</span>
                <span class="value">{{ $data['email'] ?: 'N/A' }}</span>
            </div>
            <div class="field">
                <span class="label">Pickup Address</span>
                <span class="value">{{ $data['pickup_address'] }}</span>
            </div>
            <div class="field">
                <span class="label">Destination Address</span>
                <span class="value">{{ $data['destination_address'] }}</span>
            </div>
            <div class="field">
                <span class="label">Type of Service</span>
                <span class="value">{{ $data['service_type'] }}</span>
            </div>
            <div class="field">
                <span class="label">Type of Vehicle</span>
                <span class="value">{{ $data['vehicle_type'] }}</span>
            </div>
            <div class="field">
                <span class="label">Passengers</span>
                <span class="value">{{ $data['passengers'] }}</span>
            </div>
            <div class="field">
                <span class="label">Luggage</span>
                <span class="value">{{ $data['luggage'] }}</span>
            </div>
            <div class="field">
                <span class="label">Notes</span>
                <span class="value">{!! nl2br(e($data['notes'] ?: 'N/A')) !!}</span>
            </div>
            <div class="field">
                <span class="label">SMS Consent</span>
                <span class="value">{{ !empty($data['sms_consent']) ? 'Yes' : 'No' }}</span>
            </div>
        </div>
        <div class="footer">
            <p>This email was sent from the Alar Chauffeur Service Free Quote form.</p>
        </div>
    </div>
</body>
</html>
