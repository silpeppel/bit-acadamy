<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> ALLES</button>
      <button class="btn" onclick="filterSelection('Voor')"> VOOR</button>
      <button class="btn" onclick="filterSelection('Hoofd')"> HOOFD</button>
      <button class="btn" onclick="filterSelection('Patisserie')">PATISSERIE</button>
      <button class="btn" onclick="filterSelection('Sauzen')"> SAUZEN</button> <br>
      <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Zoek naar recept...">
    </div>
    <div class="container" id="myProducts">
      <div class="cards-list">

        <div class="filterDiv Hoofd">
          <a href="/recepten/bloemkool.php">
            <div class="card">
              <div class="card_image">
                <img src="/recepten/receptenfoto/bloemkool.jpg">
              </div>
              <div class="card_title">
                <p>Hele Bloemkool</p>
              </div>
            </div>
          </a>
        </div>

        <div class="filterDiv Sauzen">
          <a href="/recepten/citroen-creme.php">
            <div class="card">
              <div class="card_image">
                <img src="/recepten/receptenfoto/citroen.jpg">
              </div>
              <div class="card_title">
                <p>Citroencreme</p>
              </div>
            </div>
          </a>
        </div>

        <div class="filterDiv Sauzen">
          <a href="/recepten/hollandaise.php">
            <div class="card">
              <div class="card_image">
                <img src="/recepten/receptenfoto/hollandaise.jpeg">
              </div>
              <div class="card_title">
                <p>Hollandaise (kidde)</p>
              </div>
            </div>
          </a>
        </div>


        <div class="filterDiv Sauzen">
          <a href="/recepten/eiwit-creme.php">
            <div class="card">
              <div class="card_image">
                <img src="/recepten/receptenfoto/creme.jpg">
              </div>
              <div class="card_title">
                <p>Eiwitcreme</p>
              </div>
            </div>
          </a>
        </div>

        <div class="filterDiv Voor">
          <a href="/recepten/watermeloen.php">
            <div class="card">
              <div class="card_image"> <img src="/recepten/receptenfoto/watermeloen.jpeg" /> </div>
              <div class="card_title">
                <p>Watermeloen Tataki</p>
              </div>
            </div>
          </a>
        </div>
        <div class="filterDiv Patisserie">
          <a href="/recepten/w_choco_mousse.php">
            <div class="card 1">
              <div class="card_image">
                <img src="/recepten/receptenfoto/6763327.jpg">
              </div>
              <div class="card_title">
                <p>Witte Chocomousse</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </body>

</html>
