<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 users List Example - Tutsmake.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #28a745;
}

li {
  float: left;
}

li a {
  
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: white;
}
</style>
</head>
<body>

<ul>

<li><a href="<?php echo base_url('public/index.php/users/');?>">Client</li>
<li><a href="<?php echo base_url('public/index.php/compte/');?>">Compte</li>
  
  
</ul>
 
<div class="container mt-5">
<a href="<?php echo base_url('public/index.php/users/create/'.$user['id']);?>" class="btn btn-success mb-2">Create</a>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="row mt-3">
     <table class="table table-bordered" id="users">
       <thead>
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td>
              <a href="<?php echo base_url('public/index.php/users/edit/'.$user['id']);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('public/index.php/users/delete/'.$user['id']);?> " class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer')">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>
    $(document).ready( function () {
      $('#users').DataTable();
  } );
</script>
</body>
</html>