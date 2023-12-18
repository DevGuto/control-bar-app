<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo route('logout')?>">Sair
                <span class="visually-hidden">(current)</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <br>
    <h2>Lista de Clientes</h2>
    <a href="<?php echo route('create')?>" class="btn btn-success">Adicionar</a>
    <table class="table table-hover table-responsive">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Celular</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php foreach($clients as $client) {?>
        <tr>
            <td><?php echo($client->id)?></td>
            <td><?php echo($client->nome)?></td>
            <td><?php echo($client->cpf)?></td>
            <td><?php echo($client->nascimento)?></td>
            <td><?php echo($client->celular)?></td>
            <td><?php echo($client->status)?></td>
            <td>
                <a href="<?php echo route('editar', ['id' => $client->id])?>" class="btn btn-sm btn-info">Editar</a>

                <form class="d-inline" method="POST" action="<?php echo route('delete', ['id' => $client->id]) ?>" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                  @csrf  
                  <button class="btn btn-sm btn-danger" name="_method" value="DELETE">Excluir</button>
                </form>
            </td>
            <?php } ?>
        </tr>

    </table>
</div>
</body>
</html>
