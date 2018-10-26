<!DOCTYPE html>
<html>
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
    <span class="border">ASTON MARTIN</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Aston Martin</h3>
  <p>Aston Martin Lagonda Limited is a British manufacturer of luxury sports cars and grand tourers. It was founded in 1913 by Lionel Martin and Robert Bamford. Steered from 1947 by David Brown, it became associated with expensive grand touring cars in the 1950s and 1960s, and with the fictional character James Bond following his use of a DB5 model in the 1964 film Goldfinger. Their sports cars are regarded as a British cultural icon. Aston Martin has held a Royal Warrant as purveyor of motorcars to HRH the Prince of Wales since 1982. It has over 150 car dealerships in over 50 countries on 6 continents making them a global automobile brand.
  Their headquarters and the main production site are in Gaydon, Warwickshire, England, alongside one of Jaguar Land Rover's development centres on the site of a former RAF V Bomber airbase. One of Aston Martin's recent cars was named after the 1950s Vulcan Bomber. Aston Martin has exploited its branding for projects including speed boats, submarines, bicycles, clothing and real estate development.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">ASTON MARTIN</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Aston Martin had a troubled history after the third quarter of the 20th century but has also enjoyed long periods of success and stability. “In the first century we went bankrupt seven times”, incoming CEO Andy Palmer told Automotive News Europe. “The second century is about making sure that is not the case.” On the back of strong demand for Aston Martin’s DB11, its first all-new model in a decade, the company swung back to a profit in the first quarter of 2017 after sustaining six years of losses.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">ASTON MARTIN</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Aston Martin was founded in 1913 by Lionel Martin and Robert Bamford. The two had joined forces as Bamford & Martin the previous year to sell cars made by Singer from premises in Callow Street, London where they also serviced GWK and Calthorpe vehicles. Martin raced specials at Aston Hill near Aston Clinton, and the pair decided to make their own vehicles. The first car to be named Aston Martin was created by Martin by fitting a four-cylinder Coventry-Simplex engine to the chassis of a 1908 Isotta Fraschini.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">ASTON MARTIN</span>
  </div>
</div>

</body>

</html>
