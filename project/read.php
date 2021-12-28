<?php include 'structure/header.php';?>

    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
        <a href="records.php"><button type="button" class="btn btn-primary mb-5 mt-2">Back to Records</button></a>
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){

          ?>
          <div class="card">
            <div class="card-header">
              Single Record
            </div>
            <div class="card-body">
              <p>Name = <?php echo $row['name']; ?></p>
              <p>Email = <?php echo $row['email']; ?></p>
              <p>Mobile No. = <?php echo $row['mobile']; ?></p>
              <p>Address = <?php echo $row['address']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "no data";
          }
          ?>
        </div>
      </div>
    </div>

<?php include 'structure/footer.php';?>