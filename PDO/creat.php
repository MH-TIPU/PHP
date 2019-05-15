<?php require 'header.php';?>
    

    <?php
        require 'db.php';
        if(isset($_POST['name']) && isset($_POST['email'])){

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'INSERT INTO people(name,email) VALUES(:name, :email)';
        $statement = $pdo->prepare($sql);
        if($statement->execute([':name' => $name, ':email' => $email])){
            echo "<script type='text/javascript'>alert('Data Insert Successfull');</script>";
        }
      }

    ?>


    <form class="card-body" method="post">
      
      <input type="text" name="name"><br>
      <input type="text" name="email"><br>
      <input type="submit" value="save">

    </form>

<?php require 'footer.php';?>