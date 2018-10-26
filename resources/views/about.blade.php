<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/app.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("/images/one.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("/images/two.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("/images/three.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>
@include('inc.navbar')
<div class="bgimg-1">
  <div class="caption">
    <span class="border">POCIĄGI TO WYGODA</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Pociągi to wygoda</h3>
  <p>Jedzie pociąg z daleka,
Ani chwili nie czeka,
Konduktorze łaskawy,
Zabierz nas do Warszawy,
Konduktorze łaskawy,
Zabierz nas do Warszawy.

Konduktorze łaskawy,
Zabierz nas do Warszawy,
Trudno, trudno to będzie,
Dużo osób jest wszędzie,
Trudno, trudno to będzie,
Dużo osób jest wszędzie.

Pięknie pana prosimy,
Jeszcze miejsce widzimy,
A więc prędko wsiadajcie,
Do Warszawy ruszajcie,
A więc prędko wsiadajcie,
Do Warszawy ruszajcie.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">POCIĄGI TO PRZYSZŁOŚĆ</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Jedzie pociąg z daleka,
Ani chwili nie czeka,
Konduktorze łaskawy,
Zabierz nas do Warszawy,
Konduktorze łaskawy,
Zabierz nas do Warszawy.
</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">POCIĄGI SĄ SZYBKIE</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Jedzie pociąg z daleka,
Ani chwili nie czeka,
Konduktorze łaskawy,
Zabierz nas do Warszawy,
Konduktorze łaskawy,
Zabierz nas do Warszawy.

Konduktorze łaskawy,
Zabierz nas do Warszawy,
Trudno, trudno to będzie,
Dużo osób jest wszędzie,
Trudno, trudno to będzie,
Dużo osób jest wszędzie.

Pięknie pana prosimy,
Jeszcze miejsce widzimy,
A więc prędko wsiadajcie,
Do Warszawy ruszajcie,
A więc prędko wsiadajcie,
Do Warszawy ruszajcie.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">POCIĄGI SĄ BEZPIECZNE</span>
  </div>
</div>

</body>
