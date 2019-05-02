<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="CSS/background.css "> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>wHOOO!</title>
  </head>
  <body>

      
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="index.php">CB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="index.php" class="nav-link" href="#">Log out <span class="sr-only">(current)</span></a>
      </li>
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Add Clients</a>
          <a class="dropdown-item" href="#">Remove Clients</a>
          <a class="dropdown-item" href="#">Deactivate Clients</a>
         <a class="dropdown-item" href="#">Search Clients</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Cotabase</h1>
      <p>Manage your client database easily!</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>ADD</h2>
        <p>Add customers to the existing database :)</p>
        <p><a href="add.php" class="btn btn-success" href="#" role="button">Add &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>REMOVE</h2>
        <p>Delete customers from the existing database permanantly : (</p>
        <p><a class="btn btn-danger" href="remove.php" role="button">Remove &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>View</h2>
        <p>View all clients in the database.</p>
        <p><a href="view.php" class="btn btn-warning" href="#" role="button">View &raquo;</a></p>
      </div>
     <div class="col-md-4">
        <h2>SEARCH</h2>
        <p>Search for any client in the entire database.</p>
        <p><a class="btn btn-info" href="search.php" role="button">Search &raquo;</a></p>

      </div>
    </div>
    <hr>

  </div> <!-- /container -->

</main>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>