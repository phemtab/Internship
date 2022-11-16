<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <form action="/" method="POST">
        @method('POST') 
        @csrf
        <label for="name">Insert Name:</label>
        <input type="text" id="name" name="name">
        
        <button type="submit" class="btn btn-primary">ยืนยัน</button>
    </form>

    @if($name ?? '')
        <p>{{$name ?? ''}}<p>
    @else
        <p><p>

    @endif
</body>
</html>