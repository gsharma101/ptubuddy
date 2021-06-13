<?php include_once('core/init.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Ptu BuddY</title>
    <?php include_once("includes/FrontHeader.php"); ?>
</head>

<body>
    <?php include_once("includes/header.php"); ?>
    <div class="container" style="padding: 20px;">
        <div class="card mx-auto shadow" style="max-width: 400px; margin-top: 6rem;
    margin-bottom: 8rem;">
            <div class="card-header bg-dark text-white">
                <h4 style="text-align: center; font-family: lato; font-weight: bold;">Welcome to PTU BuddY</h4>
                <h6 class="text-warning" style="text-align: center; font-family: lato;">Teacher Login</h6>
                <?php
                if (isset($error)) {
                    echo '<h6 class="text-danger text-center">' . $error . '</h6>';
                }
                ?>
                <form method="POST">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email or Phone Number" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" name="Tlogin">Log In</button>
                    </form><br>
                    <a href="forgot_password_t.php">Forgot Password?</a><br>
                </div>
            </div>
            </form>
            <div class="card-footer">
                <h6 class="text-center">Powered by <a href="https://www.cgc.edu.in/" target="_blank">CGC LANDRAN</a></h6>
            </div>
        </div>
    </div>
    <?php
    include_once('includes/footer.php');
    ?>
</body>

</html>