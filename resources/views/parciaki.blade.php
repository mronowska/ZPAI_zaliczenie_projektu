@extends('layouts.app')

@section('content')

<h1>Parciaki</h1>
<font color ="white"><p>Miejscowość, w której jeszcze do niedawna kursowały pociągi. Kiedy wrócą? I kiedy stworzone zostanie połączenie z Kuciejami przez Gdańsk, z przystankiem obok Centrum, pod świetlicą? Odpowiedzi na te i inne pytania znajdziecie poniżej</p>
</font>



<div class="panel-group" id="accordion">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Kiedy pociągi wrócą do Parciak?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
         Jak podaje specjalista polskiego rozku jazdy pociągów, Łuki Lips, prawdopodobnie w 2020 roku.
      </div>
    </div>
  </div>
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Na terenie jakiej gminy znajduje miejscowość Parciaki?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
         Na terenie gminy Jednorożec. Przysięgam.
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Kiedy stworzone zostanie połączenie z Kuciejami?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Niebawem.
      </div>
    </div>
  </div>
</div>

@endsection
