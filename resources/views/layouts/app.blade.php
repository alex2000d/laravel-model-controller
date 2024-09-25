<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-6">
                    <h1 class="mt-2 text-white">Boolfilms</h1>
                </div>
                <div class="col-6">
                   <ul class="list-unstyled gap-3 mt-4 d-flex justify-content-center text-white">
                      <li><a class="nav-link" href="">home</a></li>
                      <li><a class="nav-link" href="">movies</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>