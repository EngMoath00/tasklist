<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>contact us</p>
    <form action="/about" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="submit" value="send">
    </form>

    {{-- use is set beacuse name undefined...غالبا تظهر هذه المشكلة في نفس الصفحة --}}
    {{-- @if (@isset($name))
        <p>Welcome, {{ $name }}</p>
    @endif --}}
</body>

</html>
