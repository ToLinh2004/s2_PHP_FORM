<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php if(isset($_POST['name'])) {echo $_POST['name'];} //name; ?></td>
            <td><?php if(isset($_POST['email'])) {echo $_POST['email'];} //email; ?></td>
            <td><?php if(isset($_POST['password'])) {echo $_POST['password'];} //password; ?></td>
            <td><?php if(isset($_POST['number'])) {echo $_POST['number'];}//number; ?></td>
            <td><?php if(isset($_POST['message'])) {echo $_POST['message'];}//message; ?></td>
            <td><?php if(isset($_POST['province'])) {echo $_POST['province'];} //province; ?></td>
            <td>
                <?php 
                    if(isset($_POST['subject'])){
                        foreach ($_POST['subject'] as $value){
                            echo "|" .$value;
                        }
                    }
                   // subjects
                ?>
            </td>
            <td><?php if(isset($_POST['gender'])){
                if($_POST['gender'] == 'Female'){ echo "Female";}
                else if($_POST['gender'] == 'Male'){ echo "Male";}
            } // gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>