<div class="horizontalCentralizeContentMainPage">
    <div class="buttons" style="margin: 10px 0;">
        <form action="../profile/profile.php" method="get">
            <?php
                require_once("../../database/db.php");
                
                $query = "SELECT id, first_name FROM users WHERE email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                
                echo '<button type="submit" class="btn btn-success" name="id" value="' .$row['id']. '">' .$row['first_name']. '</button>';
            ?>
        </form>     
        <button type="button" class="btn btn-primary" id="signOut" onClick="document.location='../../signOut.php'">SIGN OUT</button>
    </div>
    
    <?php
        require_once('../getTableWithAllUsers.php'); //print table with all users
    ?>
</div>