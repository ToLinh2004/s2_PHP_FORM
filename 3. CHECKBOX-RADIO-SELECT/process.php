<?php require "./templates/header.php" // HEADER ?>
<?php
// YOUR CODE HERE
?> 
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php if (isset($_POST['province'])) {echo $_POST['province'];} // province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <?php if(isset($_POST['gender'])) {if($_POST['gender'] =='Male'){
                echo '<img src="./images/male.png" alt="Male">';} 
                else if ($_POST['gender'] =='Female'){
                    echo '<img src="./images/female.png" alt="Female">';
                }
                }?>
            
            <!-- YOUR CODE HERE [gender] -->
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
            $subject=[];
                if(isset($_POST['subject1']) ){
                    array_push($subject,$_POST['subject1']);
                }
                if(isset($_POST['subject2']) ){
                    array_push($subject,$_POST['subject2']);
                }
                if(isset($_POST['subject3']) ){
                    array_push($subject,$_POST['subject3']);
                }
                if(isset($_POST['subject4']) ){
                    array_push($subject,$_POST['subject4']);
                }
                foreach ($subject as $key=> $value){
                    echo $value;
                }
                // YOUR CODE HERE [subject]
            ?>
        </div>
    </div>
<?php require "./templates/footer.php" // FOOTER ?>