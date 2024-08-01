<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM `crud` where id='$id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
          <input type="text" name="user" value="<?php echo $row['username']?>"/>
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="email" name="mail" value="<?php echo $row['email']?>"/>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $row['password']?>"/>
      </div>
      <input class="submit" type="submit" name="submit" value="Update"/>
    </form>
    <?php
        }
    } ?>
</div>
</div>
</body>
</html>
