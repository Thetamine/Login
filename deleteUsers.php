<?php include "functions.php"; ?>
<?php include "header.php"; ?>
<?php deleteUsers(); ?>


<body>
    <div class="container">
        <div class="col-sm-6">
           <h1 class="text-center">Delete User</h1>
            <form action="deleteUsers.php" method="post">
               
                <div class="form-group">
                    <select name="username" id="">
                        <?php displayUsername(); ?>
                    </select>
                </div>
                
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                
            </form>
        </div>
    </div>
</body>
</html>