<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 

?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
                if(isset($_GET['subject'])){ foreach ($_GET['subject'] as $key => $value){
                    
                    $random_key=array_rand($colors);
                    $random_color = $colors[$random_key];
                    echo "<button type='button' class='btn btn-$random_color'>$value</button>";

                }}
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>