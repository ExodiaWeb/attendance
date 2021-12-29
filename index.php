<?php $title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();
?>

<h1 class="text-center">Registration for IT Conference</h1>

<form method="POST" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input required type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
        <label for="specialty">Area of Expertise</label>
        <select class="form-control" id="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php $r['specialty_id'] ?>"><?php echo $r['name'] ?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    <div class="custom-file mt-3">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar" >Choose File</label>
        <small id="avatar" class="form-text text-muted">File Upload is Optional</small>
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form>

<?php require_once 'includes/footer.php'; ?>