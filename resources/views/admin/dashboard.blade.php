<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5>this is page admin</h5>
    <form action="{{route("admin.logout")}}" method="post">
        @csrf
        <input type="submit" value="logout">
    </form>
</body>
</html>