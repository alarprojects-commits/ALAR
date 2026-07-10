<?php

return [
    'phone_tel' => env('CONTACT_NUMBER_TEL'),
    'phone_display' => env('CONTACT_NUMBER'),
    'phone_2_tel' => env('CONTACT_NUMBER_2_TEL'),
    'phone_2_display' => env('CONTACT_NUMBER_2'),
    'phones_schema_json' => json_encode(array_values(array_filter([
        env('CONTACT_NUMBER_TEL'),
        env('CONTACT_NUMBER_2_TEL'),
    ]))),
    'email' => env('EMAIL_ADDRESS'),
    'location' => env('LOCATION'),
    'mail_to' => env('CONTACT_MAIL_TO'),
    'reply_to' => env('CONTACT_REPLY_TO'),
    'whatsapp' => env('WHATSAPP_NUMBER'),
    'whatsapp_link' => env('WHATSAPP_LINK'),
];
