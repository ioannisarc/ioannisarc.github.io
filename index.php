
<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>


<body>

<h5>This is a bootstrap nav-bar</h5>
<?php include 'nav-bar-menu.php'; ?>
  
<h5>This is bootstrap container with 3 colums </h5>
  <div class="container container-1">
  
    <div class="row">

      
        <div class="col-md-4 col-1">
          
          <button type="button" class="love-btn" onclick="test()"> JQuery Button</button>
        </div>

        <div class="col-md-4 col-2">
          <form class="" action="insert_data.php" method="post">

          <div class="input-text">
              <label for="phone">id:</label>
              <input type="text" name="" value="">
            </div>


            <div class="input-text">
              <label for="fname">Name:</label>
              <input type="text" name="fname" value=""> <br>
            </div>

            <div class="input-text">
              <label for="lname">Last Name:</label>
              <input type="text" name="" value=""> <br>
            </div>

            <div class="input-text">
              <label for="email">Email:</label>
              <input type="text" name="" value="">
            </div>

            <div class="input-text">
              <label for="phone">Phone:</label>
              <input type="text" name="" value="">
            </div>

            <div class="input-text">
              <label for="address">Address:</label>
              <input type="text" name="" value="">
            </div>


           
            <input type="submit" name="" value="submit" onclick = "store_data">
          </form>
        </div>

        <div class="col-md-4 col-3">
          <h1>colum 3</h1>
        </div>



      </div>
    
  </div>


  <div class="image-field">
  </div>




</body>

</html>
