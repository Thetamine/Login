<?php include "functions.php"; ?>
<?php include "header.php"; ?>
<?php updateUsers(); ?>


<body>
    <div class="container">
        <div class="col-sm-6">
           <h1 class="text-center">Update User</h1>
            <form action="updateUsers.php" method="post">
               
                <div class="form-group">
                  <label for="username">Username:</label>
                   <input type="text" name="username" class="form-control">
                    
                </div>
                
                <div class="form-group">
                  <label for="password">Password:</label>
                   <input type="password" name="password" class="form-control">
                    
                </div>
                
                <div class="form-group">
                    <select name="id" id="">
                        <?php displayID(); ?>
                    </select>
                </div>
                
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                
            </form>
        </div>
    </div>
</body>
</html>