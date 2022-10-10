<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{route('postForm')}} method="post" style="text-align: center; margin-top: 200px;">
        @csrf
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit">
    </form>
</body>
</html>