<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظر یک کاربر خاص</title>
</head>
<body>
    <div class="wrapper resivedata-detailsperson">
        <h1> write for :</h1> {{ $resive ->firstname}}
        <h1> write for :</h1> {{ $resive ->lastname}}
        <h1> write  email person  :</h1> {{ $resive ->email}}
        <p class="type"> <h1> text person dar mored in place :</h1> {{ $resive ->text}}</p>
    </div>
</body>
</html>