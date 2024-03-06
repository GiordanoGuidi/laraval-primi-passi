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
        @forelse($players as $player)
            <li>{{$player['name']}} {{$player['surname']}}</li>
        @empty
            <h3>Non ci sono giocatori</h3>
        @endforelse
    </ul>
    
</body>
</html>