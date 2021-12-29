<?php

$title = 'User Login';

require_once 'includes/header.php';
require_once 'db/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];

    $new_password = md5($password . $username);

    $result = $user->getUser($username, $new_password);

    if (!$result) {
        echo '<div class="alert alert-danger">Username or password is incorrect! Please try again. </div>';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $result['id'];
        header("location: viewrecords.php");
    }
}
?>

<h1 class="text-center"><?php echo $title ?></h1>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

    <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password">
    <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>"; ?>

    <input class="btn btn-lg btn-primary btn-block mt-5" value="Login" type="submit">
    <a href="#">Forgot Password</a>

</form>

<?php include_once 'includes/footer.php' ?>