<?php

//
$psw_corretta = 'Boolean';

if(!empty($_GET['psw'])){
  if($psw_corretta ===  $_GET['psw']){
    $class = 'green';
    $output = 'Password corretta';
  }else{
    $class = 'red';
    $output = 'Password sbagliata';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <style>
    .red{
      color: red;
    }
    .green{
      color: green;
    }
  </style>

  <title>cerca parola</title>
</head>
<body>

<div class="container my-5">

<?php if(empty($_GET['psw'])) : ?>
  <div>
    <h1>Verifica la password</h1>
    <!-- invio il form alla stessa pagina -->
    <form action="./index.php" method="GET">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Verifica la password</label>
        <input type="text" name="psw" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi password">
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>
  </div>
<?php else: ?>
  <div>
    <h1 class="<?php echo $class ?>"><?php echo $output; ?></h1>
  </div>
<?php endif; ?>


</div>
  
</body>
</html>