<?php 

  $title = "Success";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  if(isset($_POST['submit'])){

    $success = $crud->insert($_POST['firstname'],$_POST['lastname'],$_POST['dateofbirth'],$_POST['emailaddress'],$_POST['phone'],$_POST['specialty_id']);

    if($success){
      echo '<h1 class="text-center text-success">You Have Been Registered!</h1>';
    }
    else{
      echo '<h1 class="text-center text-danger">Error!</h1>';
    }
    
  }

?>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php
            switch($_POST['specialty_id']){
                case '1':
                echo 'Database Administrator';
                break;
                case '2':
                echo 'Software Developer';
                break;
                case '3':
                echo 'Web Administrator';
                break;
                default:
                echo 'Other';
                break;
            }
           ?></h6>
          <hr>
          <p class="card-text">
              <span style="color: #888">Date of Birth : </span><?php echo $_POST['dateofbirth']; ?>
          </p>
          <p class="card-text">
              <span style="color: #888">Email : </span><?php echo $_POST['emailaddress']; ?>
          </p>
          <p class="card-text">
              <span style="color: #888">Contact Number : </span><?php echo $_POST['phone']; ?>
          </p>
          
        </div>
      </div>



<?php 

  require_once 'includes/footer.php';

?>