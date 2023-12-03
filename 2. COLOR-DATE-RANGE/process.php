<?php require "./templates/header.php" // HEADER ?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php if(isset($_POST['color1'])) {echo $_POST['color1'];} //color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php if(isset($_POST['color1'])) {echo $_POST['range'];} //range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php if(isset($_POST['color1'])) {echo $_POST['date'];} //date; ?></span>
    </div>

<?php require "./templates/footer.php" //FOOTER ?>