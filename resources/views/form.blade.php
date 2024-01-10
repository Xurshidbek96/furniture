<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/create" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Title"> <br>
        <input type="text" name="body" placeholder="Body"> <br>
        <select name="status" id="">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>

        <input type="submit" value="OK" name="s1">
    </form>

</body>
</html>
