@dump($players)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ranking Tennis Players</h1>
    <ul>
        @if(count($players))
            @foreach ($players as $player)
            <li>{{$player}}</li>
            @endforeach
        @else
            <h3>Non ci sono giocatori</h3>
        @endif
    </ul>
    
</body>
</html>