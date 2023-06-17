<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <ul>        
                    @if(Auth::check())
                        <a href="{{route('home')}}"><p class="hed">HOME</p></a>
                        <a href="{{route('books')}}"><p class="hed">Library</p></a>
                        <a href="{{route('out_users')}}"><p class="hed">Users</p></a>
                        <a href="{{route('profile', Auth::user()->id)}}"><p class="hed">Profile</p></a>
                        <a href="{{route('logout')}}"><p class="hed">Exit</p></a>
                    @else
                        <a href="{{route('home')}}"><p class="hed">HOME</p></a>
                        <a href="{{route('books')}}"><p class="hed">Library</p></a>
                    @endif
                </ul>
            </nav>
        </header>