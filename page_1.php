<?php require_once './shared/header.php'?>
<section class="section">
  <div class="container">



    <?php 
    require_once './PHP/Util.php';
    // define variables and set to empty values
    $name = $email = $gender = $comment = $id = "";
    $nameErr = $emailErr = $genderErr = $idErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $util = new Util();
      $name = $_POST["name"];
      $id = $_POST["id"];
      $email = $_POST["email"];
      $comment = $_POST["comment"];
      $gender = $_POST["gender"];


      //NAME

      if(empty($name)){
        $nameErr = "Name is required!";
      }else{
        $name = $util->test_input($name);
        if(!$util->are_words($name)){
          $nameErr = "Only letters and whitespace allowed!";
        }
      }


      //ID

      if(empty($id)){
        $idErr = "ID is required!";
      }else{
        $id = $util->test_input($id);
        $id = $util->is_integer($id);
        if(is_null($id)){
          $idErr = "Only whole numbers are allowed!";
        }
      }

      //EMAIL
      if(empty($email)){
        $emailErr = "Email is required!";
      }else{
        $email = $util->test_input($email);
        if(!$util->is_email($email)){
          $emailErr = "Invalid email format!";
        }
      }

      //Comment
      if(empty($comment)){
        $comment = "";
      }else{
        $comment = $util->test_input($comment);
      }



      //Gender
      if(empty($gender)){
        $genderErr = "Gender is required!";
      }else{
        $gender = $util->test_input($gender);
      }

    }

    ?>

    <h2 class="title">Sign Up </h2>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--Misma página!-->
     <p class="help is-danger">Required field *</p>

     <div class="field">
      <label class="label">Name</label>
      <div class="control">
        <input class="input is-success" type="text" name="name" value="<?= $name;?>">
      </div>
      <p class="help is-danger"><?= $nameErr;?></p>
    </div>


    <br>
    <div class="field">
      <label class="label">ID</label>
      <div class="control">
        <input class="input is-success" type="text" name="id" value="<?= $id;?>">
      </div>
      <p class="help is-danger"><?= $idErr;?></p>
    </div>

    <br>

    <div class="field">
      <label class="label">E-mail</label>
      <div class="control has-icons-left">
        <input class="input is-success" type="email" name="email" value="<?=$email;?>" >
        <span class="icon is-small is-left">
         <i class="fas fa-envelope"></i>
       </span>
       <p class="help is-danger"><?= $emailErr;?></p>
     </div>
   </div>


   <br>
   <div class="field">
    <label class="label">Comment</label>
    <div class="control">
      <textarea class="textarea" name="comment" rows="5" cols="40"><?= $comment;?>  </textarea>
    </div>
  </div>
  <br>

  <div class="field">
    <label class="label"></label>
    <div class="control">
      <label class="radio">
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
        Male
      </label>
      <label class="radio">
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
        Female
      </label>
      <label class="radio">
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
        Other

      </label>
      <p class="help is-danger"><?= $genderErr;?></p>

    </div>
  </div>

  <br>

  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Submit</button>
    </div>
    <div class="control">
      <button class="button is-link is-light">Cancel</button>
    </div>
  </div>
  <br>

</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>




</div>
</section>
<?php require_once './shared/footer.php' ?>



