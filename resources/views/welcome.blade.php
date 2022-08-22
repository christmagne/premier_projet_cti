<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body{
                background:url('https://i.f1g.fr/media/eidos/805x453_crop/2020/09/11/XVM8bad0f7a-f434-11ea-9e52-3d3af47c4cfe.jpg');
                background-repeat:no-repeat;
                background-position:top;
                background-size:cover;
            }
        </style>
           
        
         
    </head>
    <body >
    <div class="container-fluid p-5 bg-success text-white text-center">
           <h1>cti</h1>
           <p>BIENVENUS au cti VOTRE PLATEFORME DE COURS EN LIGNE</p> 
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
            </div>
           <div class="col-sm-4">
           </div>
          <div class="col-sm-4">
          </div>
        </div>
    </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" >
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" >
                    @auth
                    <button type="button" class="btn btn-success" >
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    </button>    
                    @else

                    <button type="button" class="btn btn-success" class="btn-group">
                        <a href="{{ route('login') }}"  class="text-white underline">Log in</a>
                    </button>
                        @if (Route::has('register'))
                        <button type="button" class="btn btn-success" class="btn-group" >
                            <a href="{{ route('register') }}"  class="text-white underline">Register</a>
                        </button>     
                        @endif
                    @endauth
                </div>
            @endif
            
           
               
        </div>
    </body>
</html>
