<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($value >20 )
    <div style="background : red " >its greater then 20</div>
    @elseif ($value < 20 )
    <div style="background : green " >its less then 20</div>
    @endif
    <h1>my name is {{$nameInBlade}}</h1>
    <div style="background : yellow ; padding : 10px; border-radius : 5px ;display: flex ;justify-content: space-between" >
    @foreach($studant as $s)
     <h1>{{$s}}</h1><br>
    @endforeach
    </div>
</body>
</html>