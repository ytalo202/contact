<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
</head>
<body>
<h1>Contact Us any time</h1>

<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your name please">
    <input type="email" name="email" placeholder="Your email please">
    <textarea name="message" cols="30" rows="10" placeholder="Your query"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>