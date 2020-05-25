<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Bootstrap 101 Template</title>

   <!-- include header -->
   <?php include_once 'layout/header.php'; ?>



  </head>




  <body>
   <?php include_once 'Database.php'; ?> 
<header>
  <h2 class="text-center text-dark"><span class="badge badge-warning">VUEJS</span></h2>
</header>

 

<div id="appBooks">
  <div class="container">
    <div class="row">
      <div class="col">
        <button @click="btnRed" class="btn btn-success" title="Book"><i class="fas fa-plus-circle fa-2x"></i></button>
      </div>

      <div class="col text-right">
        <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></h5>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-12">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Action</th>
          </tr>
          <thead>
            <tbody>
              <tr v-for="(book, index) of books">
                <td>{{book.id}}</td>
                <td>{{book.name}}</td>
                <td>{{book.description}}</td>

                <td>
                  <div class="col-md-8">
                    <input type="number" v-model.number="book.stock" class="form-control text-right" disabled>
                  </div>
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <button class="btn btn-secondary" title="edit" @click="btnEdit(book.id, book.name, book.description, book.stock)"><i class="fas fa-pencil alt"></i>
                    </button>
                    <button class="btn btn-danger" title="delete" @click="btnDelete(book.id)">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </div>
                </td>
              <tbody>

        </table>
      </div>
    </div>
  </div>
</div>












<!-- include footer -->
<?php include_once 'layout/footer.php'; ?>

  </body>
</html>