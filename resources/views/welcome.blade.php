<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container vh-100">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card bg-warning text-dark">

                        <h5 class="card-title">{{ $movie['title'] }}</h5>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
