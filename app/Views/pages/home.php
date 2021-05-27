<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/style.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body class="container">

     <h1>Registrace</h1>
     <br>
     <br>
     <div class="card">
     <div class="card-body">
    <?= \Config\Services::validation()->listErrors(); ?>
     <form action="<?php echo site_url('Pages/create');?>" method="post">
     <div class="form-group">
         <label for="jmeno">Jméno:</label>
         <input type="text" class="form-control" id="jmeno" placeholder="Zadejte Jméno" name="jmeno">
     </div>
     <br>
     <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" placeholder="Zadejte Email" name="email">
     </div>
     <br>
     <div class="form-group">
         <label for="heslo">Heslo:</label>
         <input type="password" class="form-control" id="heslo" placeholder="Zadejte Heslo" name="heslo">
     </div>
     <br>
     <div class="form-group">
         <label for="heslo_znova">Heslo znova:</label>
         <input type="password" class="form-control" id="heslo_znova" placeholder="Zadejte Heslo znova" name="heslo_znova">
     </div>
     <br>
     <!-- <div class="form-group">
     <div class="form-check">
  <input class="form-check-input" value="Muž" type="radio" name="pohlaví" id="flexRadioDefault1">
  <label class="form-check-label" for="pohlaví">
   Muž
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" value="Žena" type="radio" name="pohlaví" id="flexRadioDefault2" >
  <label class="form-check-label" for="pohlaví">
    Žena
  </label>
</div> -->
<div id="pohlaví" class="form-group">
    <select type="select" name="pohlaví" class="col-lg-12" >
    <option id="text"selected disabled>Vyberte prosím své pohlaví</option>
    <option value="Muž">Muž</option>
    <option value="Žena">Žena</option>
</select>

</div>


<br />

     <br>
     <button type="submit" class="btn btn-primary col-lg-12"">Přidat</button>
     </form>
</form>
</div>
</div>
</body>
</html>