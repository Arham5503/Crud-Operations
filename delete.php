<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php 
                if(isset($_POST['deletebtn'])){
                    $id=$_POST['id'];
                    $query="DELETE FROM `crud` WHERE id='$id'";
                    $result = mysqli_query($conn, $query);
                    header("location:index.php");}
                    mysqli_close($conn);
                    ?>
</div>
</div>
</body>
</html>
