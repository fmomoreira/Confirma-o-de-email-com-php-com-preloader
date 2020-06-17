<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/preloader.css" >
  </head>
  <body class="preloader-site" >
    <div class="preloader-wrapper" style="display:none">
      <div class="preloader">
          <img src="img/831.gif" alt="NILA">
      </div>
    </div>
      <div class="container" id="formulario">
        <form id="confirmaremail" action="backend/confirmaremail.php" method="POST" onsubmit="myFunction()">
          
          <div class="form-group" >
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: João Morais" required>
          </div>
          <div class="form-group">
            <label for="email">Seu melhor email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Ex:email@email.com.br" required>
          </div>
          <button type="submit" class="btn btn-primary" value="Submit">Enviar</button>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
      function myFunction() {
        $('.preloader-wrapper').show();
        $('body').removeClass('preloader-site')
      }
    </script>
  </body>
</html>