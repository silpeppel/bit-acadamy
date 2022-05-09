<!DOCTYPE html>
<html lang="en">

<?php
$portie = "1 liter";
$aantal = 1;
$ia = 200;
$ib = 200;
$ic = 50;
$id = 800;
$ie = 14;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $aantal = $_POST['operator'];
}

$ia = $aantal * $ia;
$ib = $aantal * $ib;
$ic = $aantal * $ic;
$id = $aantal * $id;
$ie = $aantal * $ie;

?>
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/recept.css">
    <script src="recept.js"></script>
  </head>
<body>
<style>
body {
  background-image: url('/recepten/receptenfoto/creme.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<div class="containers">
  <h2>Eiwitcreme</h2>
<form class="form" method="post" action="">
  <h3 id="recept">Recept is voor <?php echo $portie; ?></h3>
  <label id="recept"for="porties">Hoeveel keer recept: </label></br>
  <div id="myDIV" class="invoer"> 
            <button class="btn" type="submit" name="operator" value="0.5"/>0.5</button>
            <button class="btn active" type="submit" name="operator" value="1"/>1</button>
            <button class="btn" type="submit" name="operator" value="2"/>2</button>
            <button class="btn" type="submit" name="operator" value="3"/>3</button>
  </div>
</form>

  <h3>Ingrediënten</h3>
  <ul class="responsive-table">
    <li class="table-row">
      <div class="col col-1" data-label="qnt"><?php echo $ia; ?></div>
      <div class="col col-2" data-label="waarde">gram</div>
      <div class="col col-3" data-label="product">eiwit</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="qnt"><?php echo $ib; ?></div>
      <div class="col col-2" data-label="waarde">gram</div>
      <div class="col col-3" data-label="product">yoghurt</div>
    </li> 
    <li class="table-row">
      <div class="col col-1" data-label="qnt"><?php echo $ic; ?></div>
      <div class="col col-2" data-label="waarde">gram</div>
      <div class="col col-3" data-label="product">sushiazijn</div>
    </li> 
        <li class="table-row">
      <div class="col col-1" data-label="qnt"><?php echo $id; ?></div>
      <div class="col col-2" data-label="waarde">ml</div>
      <div class="col col-3" data-label="product">olie</div>
    </li> 
      <li class="table-row">
      <div class="col col-1" data-label="qnt"><?php echo $ie; ?></div>
      <div class="col col-2" data-label="waarde">gram</div>
      <div class="col col-3" data-label="product">zout</div>
    </li> 
  </ul>
</div>
<div class="containers">
  <h3>Bereidingen</h3>
  <ul class="responsive-table">
    <li class="table-row">
      <div>Meng alles behalve olie in de thermoblender</div>
    </li>
    <li class="table-row">
      <div>Voeg langzaam de olie toe zo dat de creme niet in de schift gaat.</div>
    </li>
  </ul>
</div>
<div class="containers">
  <h3>Toepassingen</h3>
  <ul class="responsive-table">
    <li class="table-row">
      <div>Alle smaken mogelijk.</div>
       </li>

  </ul>
</div>

<a href="/index.php">
 <img src="/back-button.png" class ="back"/>   
</a>

    
 </body>

</html>
