<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Login Page/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" 
    crossorigin>
    <link href="https://fonts.googleapis.com/css2? 
    family=Jost&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
    

</head>
<body>
    <nav id="navbar">
        <div class="container">
            <a href= "{{route('homepage')}}">

                <img  src="Login Page/assets/logo.png" alt="">
            </a>
            <div class="nav-menu">
                
          
    </nav>
    <section class="loginpage">
        
        <form method="POST" action="{{ route('login-auth') }}">
            @csrf
            <div class="row">
                <div class="column">
                    <h2>Login Team</h2>
                    <div id="inputNamaTeam">
                        @if(session()->has('login_error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session()->get('login_error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif
                        <label for="namaTeam"></label>
                        <input type="text" placeholder="Nama Team" name="name" required autofocus>
                </div>
                <div id="inputPW">
                    <label for="Password"></label>
                    <input type="password"      placeholder="Password" name="password" required>
                </div>
                <button id="submit">LOGIN</button>
                
            </form>
                <div class="post-button-text">
                    <a href="{{route('register')}}"><p>Register</p></a>
                    <a hidden href="{{route('register')}}"><p>Foreget Password</p></a>

                  
                    
                </div>
            <div class="column"></div>
            
          </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>