<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar na sua conta - Sistema</title>
    <link rel="stylesheet" href="{{URL::asset('css/_auth/style.css')}}">
</head>
<body>
    
    @yield('panel')

    <footer>
        ProControl - &copy; 2022
    </footer>

    {{-- ul>li*7>a{item$} --}}
    @yield('scripts')
    
</body>
</html>