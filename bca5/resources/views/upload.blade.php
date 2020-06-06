<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCA5</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        Book title:
        <br />
        <input type="text" name="title" />
        <br /><br />
        Logo:
        <br />
        <input type="file" name="logo" />
        <br /><br />
        <input type="submit" value=" Save " />
    </form>
</body>
</html>
