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
    {{-- header --}}
    <header class="flex align-center justify-content-between ">
        {{-- titolo --}}
        <div class="title flex align-center justify-center">
            <h1 id="logo1">B</h1>
            <h1 id="logo2">boolflix</h1>
        </div>

        {{-- sottotitolo --}}
        <div class="slogan">"Il tuo show inizia qui!"</div>
    </header>
    <main class="p-5">
        <div class="container ">
            <div class="row justify-content-center ">
                @foreach ($movies as $movie)
                    <div class="col-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header">
                                {{ $movie->nationality }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }} </h5>
                                <p class="card-text">{{ $movie->original_title }} - {{ $movie->date }}
                                </p>

                            </div>
                            <div class="card-footer text-body-secondary">
                                {{ $movie->date }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
