<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your COVID-19</title>
</head>

<body>
    <h1>Reminder: Your COVID-19 Vaccination is Tomorrow</h1>

    <p>Dear {{ $patient->name }},</p>

    <p>This is a reminder that your COVID-19 vaccination is scheduled for tomorrow at
        {{ $patient->registration->scheduled_date }}.</p>

    <p>Please remember to bring your ID and any required documents.</p>

    <p>Thank you for your participation in the vaccination program.</p>

</body>

</html>
