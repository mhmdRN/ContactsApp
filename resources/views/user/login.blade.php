<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Contacts</title>
    <style>
        body{
            background-color:#E8F5E9 ;
        }
    </style> 
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #C8E6C9;">
            <div class="container">
                <a class="nav-link fw-bold fs-2" href="/">Contacts</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                            <li class="nav-item">
                                <p class="lead">Don't have an account</p>
                                <a class="nav-link btn btn-success text-white"
                                 href="/register">Register?</a>
                            </li>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-5 border border-success rounded p-3">
                <form action="{{url('authenticate')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                        value="{{old('email')}}">
                        @error('email')
                            <p class="lead text-danger">{{dd($message)}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password"
                        value="{{old('password')}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
        </div>
    </div>
    
    <footer class="pt-3 fixed-bottom" style="background-color: #C8E6C9">
        <div class="container text-center">
            <p class="leade">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi fugit totam nam minus impedit cum. Dolorum facilis minus, animi beatae at commodi asperiores repellat delectus ab laborum vitae veniam placeat exercitationem officia est aspernatur sunt, architecto sit! Inventore alias omnis excepturi quos optio, quae, facere quo veniam, delectus ea dolorem?</p>
           2022 - 2023 All Rights Reserved.
        </div>
    </footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
