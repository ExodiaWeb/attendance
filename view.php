<?php
$title = 'View Record';
require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'includes/auth_check.php';


if (!isset($_GET['id'])) {
    include 'includes/errormessage.php';
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id);



?>
    <img src="<?php echo empty($result['avatar_path'])? "uploads/images.jpg":$result['avatar_path']; ?>" alt="avatar" style="width:150px; height:150px;">
    <div class='d-flex justify-content-center my-5'>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    echo $result['firstname'] . " " . $result['lastname'];
                    ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $result["name"]; ?></h6>
                <p class="card-text">Date of Birth: <?php echo $result["dateofbirth"]; ?></p>
                <p class="card-text">Email Address: <?php echo $result["emailaddress"]; ?></p>
                <p class="card-text">Phone Number: <?php echo $result["contactnumber"]; ?></p>
            </div>
        </div>
    </div>
    <br />
    <div class="">

        <a href="viewrecord.php" class="btn btn-info btn-block">Back to list</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning btn-block">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger btn-block">Delete</a>
    </div>



<?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>