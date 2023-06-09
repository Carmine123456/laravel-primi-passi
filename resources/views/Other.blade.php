<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <nav>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item pe-2"><a class="text-decoration-none text-black" href="{{route('Home')}}">Home</a></li>  
                            <li class="nav-item"><a class="text-decoration-none text-black" href="{{route('Other')}}">About</a></li>          
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row py-5">
            <h1 class="py-3 text-center">{{$hello}}</h1>
        </div>
    </div>
    
</body>
</html>