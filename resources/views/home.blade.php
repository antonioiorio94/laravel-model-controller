<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
        <h1>Movies DB</h1>
    <div class="container">
        @if (count($movies)>0)
            @foreach ($movies as $movie)

                <div class="card">
                    <h2>Title: {{$movie['title']}}</h2>
                <p>Original Title: {{$movie['original_title']}}</p>
                <p>Date of relase: {{$movie['date']}}</p>
                </div>



                @endforeach

        @endif

    </div>



</body>
</html>
