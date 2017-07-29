<?php include "functions.php"; ?>
<?php include "header.php"; ?>
  
<?php 

readUsers();

?>
   
<body>
    <div class="container">
        <div class="col-sm-6">
            
            <?php 
            
            while($row = mysqli_fetch_assoc($result)) {
            
                ?>
                <pre>
                    
                <?php
                
                print_r($row);
                
                ?>
                </pre>
            
            <?php
                
            }
        
            ?>
            
        </div>
    </div>
</body>
</html>