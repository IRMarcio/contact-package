<!DOCTYPE html>

<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<title>Contact Us</title>

<body>

<h1>Contact US any time</h1>

<form action="{{ route('contact') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" class="form-control">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" placeholder="Your Query Message" cols="30" > </textarea>
    <input type="submit" value="Submit">
</form>


</body>
</html>
