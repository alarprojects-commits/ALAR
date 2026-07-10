<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; margin: 0; padding: 0; }
        .wrapper { background-color: #f4f7fb; padding: 40px 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .header { background-color: #0d1b2a; color: #ad8b24; padding: 40px 20px; text-align: center; }
        .header h1 { margin: 0; font-size: 28px; text-transform: uppercase; letter-spacing: 2px; }
        .header p { margin: 10px 0 0; color: rgba(255,255,255,0.7); font-size: 16px; }
        .content { padding: 40px; }
        .greeting { font-size: 22px; font-weight: bold; color: #0d1b2a; margin-bottom: 20px; }
        .next-box { background-color: #0d1b2a; color: #ffffff; padding: 25px; border-radius: 8px; margin: 30px 0; border-left: 4px solid #ad8b24; }
        .next-box h4 { margin: 0 0 10px; color: #ad8b24; text-transform: uppercase; letter-spacing: 1px; }
        .next-box p { margin: 0; font-size: 15px; line-height: 1.5; color: rgba(255,255,255,0.9); }
        .footer { padding: 30px; text-align: center; border-top: 1px solid #eee; }
        .footer-info { margin-bottom: 20px; }
        .footer-info p { margin: 5px 0; font-size: 14px; color: #666; }
        .footer-info a { color: #ad8b24; text-decoration: none; font-weight: bold; }
        .social-links { margin-top: 20px; }
        .social-links a { display: inline-block; margin: 0 10px; color: #0d1b2a; text-decoration: none; font-size: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1>✨ THANK YOU!</h1>
                <p>We've received your message</p>
            </div>
            <div class="content">
                <div class="greeting">Hello {{ $name }}! 👋</div>
                <p>Thank you for reaching out to <strong>Alar Chauffeur Service</strong>. We're excited to hear from you and appreciate you taking the time to contact us!</p>
                
                <div class="next-box">
                    <h4>📬 WHAT HAPPENS NEXT?</h4>
                    <p>Our team has received your inquiry and will review it carefully. One of our specialists will get back to you within <strong>few minutes</strong>.</p>
                </div>

                <p>In the meantime, feel free to explore our services and learn more about how we can provide you with the ultimate luxury transportation experience.</p>
            </div>
            <div class="footer">
                <div class="footer-info">
                    <p>📧 <strong>EMAIL:</strong> <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a></p>
                    <p>📱 <strong>PHONE:</strong> <a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a></p>
                    <p>🌐 <strong>WEBSITE:</strong> <a href="{{ url('/') }}">https://alarchauffeurservice.com/</a></p>
                </div>
                <p style="font-size: 12px; color: #999;">&copy; {{ date('Y') }} Alar Chauffeur Service. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
