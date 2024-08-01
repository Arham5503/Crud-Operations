<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label for="Id">Id</label>
            <input type="text" name="id" readonly placeholder="Auto- Generted" />
        </div>
        <div class="form-group">
            <label for="user">Username</label>
            <input type="text" name="user" />
        </div>
        <div class="form-group">
            <label fo="mail">Email</label>
            <input type="email" name="mail" />
        </div>
        <div class="form-group">
            <label fo="password">Password</label>
            <input type="text" name="password" />
        </div>
        <input class="submit" type="submit" name="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
