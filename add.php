<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="add.css "> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ADD</title>
  </head>

 <body class="bg-light">
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="C:\Users\nishi\Desktop\cotabase.PNG" alt="" width="100" height="100">
    <h2>Add client form</h2>
    <p class="lead">Enter client data and click on the Add button to add the client into the database!</p>
  </div>
  <div class = 

      <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Client data: </h4>
      <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>
          <div class="mb-3">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid company name is required.
            </div>
          </div>
          <div class="mb-3">
            <label for="companyType">Company Type</label>
            <input type="text" class="form-control" id="companyType" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid company name is required.
            </div>
          </div>


          <div class="mb-3">
            <label for="clientID">Client ID</label>
            <input type="text" class="form-control" id="clientID" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid client ID is required.
            </div>
          </div>
<div class="col-md-6 mb-3">

        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" id="address" placeholder="000" required>
          <div class="invalid-feedback">
            Please enter your phone number.
          </div>
        </div>


         <div class="mb-3">
          <label for="entryDate">Entry Date</label>
          <input type="text" class="form-control" id="entryDate" placeholder="000" required>
          <div class="invalid-feedback">
            Please enter your entry date.
          </div>
        </div>
         <div class="mb-3">
          <label for="serviceProvided">Service Provided</label>
          <input type="text" class="form-control" id="serviceProvided" placeholder="nothing" required>
          <div class="invalid-feedback">
            Please enter your entry date.
</div>
        </div>



        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit"><a style="color: white;" href="view.php" >Add</a></button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Cotabase</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>



 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>