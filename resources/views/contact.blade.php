@extends('layouts.app')

@section('content')

  <h1>Kontakt</h1>

  {!! Form::open(['url' => 'contact/submit']) !!}

    <div class="form-group">
      {{Form::label('login', 'Login: ')}}
      {{Form::text('login','', ['class'=> 'form-control', 'placeholder' => 'Wpisz login'])}}
    </div>

    <div class="form-group">
      {{Form::label('email', 'E-Mail: ')}}
      {{Form::text('email', '', ['class'=> 'form-control', 'placeholder' => 'Wpisz adres e-mail'])}}
    </div>

    <div class="form-group">
      {{Form::label('message', 'Wiadomość: ')}}
      {{Form::textarea('message', '', ['class'=> 'form-control', 'placeholder' => 'Wpisz wiadomość'])}}
    </div>

    <div>
      {{Form::submit('Wyślij', ['class'=>'btn btn-primary'])}}
    </div>


<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
  {!! Form::close() !!}


@endsection
