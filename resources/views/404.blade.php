@extends('layout')
    
@section ('head-content')
    <link rel="stylesheet" href="css/errorStyles.css">
    <script src="js/pagenotfoundScript.js" defer></script>
@endsection('head-content')

@section ('content')
    <main id="main">
        <div id="notfound">
            <img src="img/pagenotfound/404_not_found.svg" alt="">
            <div id="page-info">
                <h2>Page Not Found</h2>
                <p>
                    Sorry, <br>
                    We couldn't find the page you were looking for...
                </p>
                <div id="backBtns">
                    <a href="{{url()->previous()}}">Go Back</a>
                    <p>Or</p>
                    <a href="{{route('home')}}">Go Home</a>
                </div>
            </div>
        </div>
    </main>
@endsection('content')