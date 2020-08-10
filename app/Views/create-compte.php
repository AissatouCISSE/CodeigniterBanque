<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 User Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('public/index.php/compte/store');?>" name="compte_create" id="compte_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="formGroupExampleInput">Numero Agence</label>
            <input type="text" name="numAgence" class="form-control" id="formGroupExampleInput" placeholder="Please enter numAgence">
             
          </div> 
 
          <div class="form-group">
            <label for="formGroupExampleInput">Numero Compte</label>
            <input type="text" name="numCompte" class="form-control" id="formGroupExampleInput" placeholder="Please enter numCompte">
             
          </div>  
          
          <div class="form-group">
            <label for="formGroupExampleInput">Cle Rib</label>
            <input type="text" name="cleRib" class="form-control" id="formGroupExampleInput" placeholder="Please enter cleRib">
             
          </div>  

          <div class="form-froup">
							<label>Client</label>
							<select class="form-control"  name="idpays">
                            <?php
                            use App\Models\UserModel;
                            $client = new UserModel();
                            $uti  = $client->findAll();
                            var_dump($uti);
                            foreach($uti as $ut){
                              echo "<option value=".$ut->id.">".$ut->name."</option>";
                            }
                            ?>
							</select>
			</div>
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#compte_create").length > 0) {
      $("#compte_create").validate({
      
    rules: {
      numAgence: {
        required: true,
      },
  
      numCompte: {
        required: true,
      },
  
      cleRib: {
        required: true,
      },
  
       
    },
    messages: {
        
        numAgence: {
        required: 'enter numAgence',
      },
  
      numCompte: {
        required: 'enter numCompte',
      },
  
      cleRib: {
        required: 'enter cleRib',
      },
    },
  })
}
</script>
</body>
</html>