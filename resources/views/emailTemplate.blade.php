<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mappiya Email</title>
</head>
<body>
    <p><strong>Full Name: </strong>{{ $dataReceived['name'] }}</p>
    <p><strong>Address: </strong>{{ $dataReceived['address'] }}</p>
    <p><strong>Phone Number: </strong>{{ $dataReceived['number'] }}</p>
    <p><strong>Email Address: </strong>{{ $dataReceived['email'] }}</p>
    <p><strong>Subject: </strong>{{ $dataReceived['subject'] }}</p>
    <br>
    <h2>Message</h2>
    {{ $dataReceived['body'] }}
</body>
</html>
