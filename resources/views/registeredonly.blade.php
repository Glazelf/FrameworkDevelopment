@extends('dashboard')
@section('content')
<title>Login</title>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                    @guest 
                    <?php 
                    App::Abort(403);
                    ?>
                    @else
                    <p>U bent ingelogd, nu kunt u deze pagina zien. Doe alsof er iets heel leuks te doen is op deze pagina.</p>
                    @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection