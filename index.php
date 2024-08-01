<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <?php 
                $query="SELECT * FROM `crud`";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<td>" .$row['id']."</td>";
                        echo "<td>" .$row['username']."</td>";
                        echo "<td>" .$row['email']."</td>";
                        echo "<td>" .$row['password']."</td>";?>
                        <td>
                        <a href='edit.php?id=<?php echo $row['id']?>'>Edit</a>
                        <a href='delete-inline.php?id=<?php echo $row['id']?>'>Delete</a>
                        </td> </tr>
              <?php      }
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
