
<!DOCTYPE html>
<html>
  <head>
@include('layouts.dodatki')


      <title>ZPAI</title>



  </head>
  <body>

<link rel="stylesheet" href="/css/app.css">
    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))

        @include('inc.showcase')

      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
          </div>
          <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
          </div>
        </div>
    </div>




@include('layouts.karuzela')



    <footer id="footer" class="text-right">
        <p> ZPAI || Ronowska Monika</p>
    </footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src ="js/bootstrap.js"></script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

  </body>
</html>
