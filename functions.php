<?php include "db.php"; ?>


<?php 

function registerUser() {
    
    if(isset($_POST['submit'])) {

        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO testusers(username, password) ";
        $query .= "VALUES('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {

            die("QUERY FAILED. " . mysqli_error($connection));

        } else {

            header("Location: home.php");

        }
    }   
    
}

function readUsers() {
    
    global $connection;
    global $result;

    $query = "SELECT * FROM testusers";

    $result = mysqli_query($connection, $query);

    if(!$result) {

        die("Query FAILED. " . mysqli_error($connection));

    }

}

function displayUsername() {
    
    global $connection;

    $query = "SELECT * FROM testusers";

    $result = mysqli_query($connection, $query);

    if(!$result) {

        die("QUERY FAILED. " . mysqli_error($connection));

    }

    while($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];

        echo "<option value='$username'>$username</option>";

    }
    
}

function updateUsers() {
    
    global $connection;

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE testusers SET username = '$username', password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result) {

            die("QUERY FAILED. " . mysqli_error($connection));

        } else {

            echo "Record updated.";

        }
    }
    
}

function deleteUsers() {
    
    global $connection;

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE from testusers ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result) {

            die("QUERY FAILED. " . mysqli_error($connection));

        } else {

            echo "Record deleted.";

        }
    }
    
}

?>