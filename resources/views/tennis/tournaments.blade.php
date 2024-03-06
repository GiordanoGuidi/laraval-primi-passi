<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tournamentes ATP</h1>
    <ul>
        @forelse($tournaments as $tournament)
            <li>{{$tournament['name']}} - {{$tournament['location']}}</li>
        @empty
            <h3>Non ci sono tornei disponibili</h3>
        @endforelse

    </ul>
    
</body>
</html>