<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php 
                if(isset($_POST['showbtn'])){
                    $id=$_POST['id'];
                    $query="SELECT * FROM `crud` WHERE id='$id'";
                    $result=mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Userame</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']?>" />
            <input type="text" name="user" value="<?php echo $row['username']?>" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="mail" value="<?php echo $row['email']?>" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $row['password']?>" />
        </div>
    <input class="submit" type="submit" name="submit" value="Update"  />
    </form>
    <?php
       }
    }
    }?>
</div>
</div>
</body>
</html>
