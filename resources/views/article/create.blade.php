<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mappiya Rider Form</title>
    <link rel="stylesheet" href="{{ asset('formcss/styles.css')}}">
</head>
<body>
    <section id="rider-form">
        <div class="container rider-wrapper">
            <div class="row">
                @if(session('flash'))
                <p style="color: green">{{ session('flash') }}</p>
                @endif
                <h1>Mappiya Inquire Form</h1>
                <form class="cf" action="/create", method="POST">
                    @csrf
                    <div class="half left cf">
                        <input type="text" name="name" id="input-name" placeholder="Full Name">
                        <input type="text" name="address" id="input-address" placeholder="Address">
                        <input type="number" name="number" id="input-number" placeholder="Phone Number">
                        <input type="email" name="email" id="input-email" placeholder="Email address">
                    </div>
                    <div class="half right cf">
                        <input type="text" name="subject" id="input-subject" placeholder="Subject">
                        <textarea name="body" type="text" id="input-message" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" value="Submit" id="input-submit">
                </form>
            </div>
        </div>
    </section>
</body>
</html>

