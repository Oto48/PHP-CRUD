<?php include 'structure/header.php';?>

    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
          <a href="records.php"><button type="button" class="btn btn-primary mb-5 mt-2">Check Records</button></a>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php include 'structure/footer.php';?>