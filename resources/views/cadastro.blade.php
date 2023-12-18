<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
          </svg>
          Bar do Du</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo route('home')?>">Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <form class="container col-4" method="POST" action="<?php echo route('store')?>">
  @csrf
  <br>
      <h1>Cadastro de Cliente: </h1>
      <spam style="color: #FF0000;">*todos os campos são obrigatórios</spam>
      <br>
      <br>
    <div class="form-group">
        <label for="usr">Nome:</label>
        <input name='nome' type="text" class="form-control" id="usr">
    </div>

    <br>
    <div class="form-group">
        <label for="usr">CPF:</label>
        <input name='cpf' type="text" class="form-control" id="usr">
    </div>
    <br>
    <div class="form-group">
      <label for="usr">Data de Nascimento:</label>
      <input  name='nascimento' type="text" class="form-control" id="usr">
    </div>
    <br>
    <div class="form-group">
      <label for="usr">Celular:</label>
      <input  name='celular' type="text" class="form-control" id="usr">
    </div>
    <br>
      <div class="form-group">
        <label for="usr">Status: </label><br>
        <div class="radio">
            <label><input type="radio" name="status" value="0" checked> Liberado</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="status" value="1"> Bloqueado</label>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <button type="submit" class="btn btn-danger" action="">Cancelar</button>
      <script>
      </script>
</body>
</html>
