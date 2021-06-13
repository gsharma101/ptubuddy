<?php
include_once('core/init.php');
$student_id = @$_SESSION['student_id'];
$user = $getFromS->UserData($student_id);
if ($getFromS->loggedIn() === false) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ptu Buddy</title>
    <?php include_once("includes/backHeader.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
    <script src="https://kit.fontawesome.com/1b8b2eefd1.js" crossorigin="anonymous"></script>
    <script src="assets/js/sidenav.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("includes/profileNevigation.php"); ?>
    <div class="container-fluid gedf-wrapper" style="margin-top:2rem;">
        <div class="row ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="h5"><a href="profile"><?php echo ucfirst($user->fname) . " " . ucfirst($user->lname); ?></a></div>
                        <img class="card-img-top" style="width:150px;" src="<?php echo $user->profile_image; ?>" alt="Card image">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">General Information</div>
                            <div class="h5 text-uppercase"><?php echo strtoupper($user->branch) . " " . $user->semester; ?> Semester</div>
                            <div class="h5 text-uppercase text-muted"><?php echo $user->uni_roll; ?></div>
                        </li>
                        <li class="list-group-item bg-dark text-white text-center">
                            <a class="text-white" href="https://www.facebook.com/ptubuddy/" target="_blank"><i class="fa fa-facebook"></i>&nbsp;facebook</a>&nbsp;
                            <a><i class="fa fa-whatsapp"></i>&nbsp;whatsapp</a>
                            <a></a>
                        </li>
                    </ul>
                </div><br>
                <div class="card">
                    <div class="card-header text-center text-uppercase">
                        <h5>clipboard</h5>
                    </div>
                    <div class="card-body text-center">
                        <ul class="list-group">
                            <button type="button" data-toggle="modal" data-target="#studentsNotes" class="list-group-item bg-primary text-uppercase text-white">notes</button>
                        </ul>
                    </div>
                </div><br>
            </div>
            <div class="col-md-6 gedf-main buddy-quote" style="margin-bottom: 20px;">
                <div class="card gedf-card">
                    <div class="card gedf-card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="text-uppercase text-center">quote of the day</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-center" style="font-size: 20px; font-weight: bold; font-family:buddy_quote;">"No amount of money ever bought a second of time"</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--XXXXXXXXXXXXXXXXXX-ALERTS-XXXXXXXXXXXXXXXXXXXXXXXXXXX-->
            <div class="col-md-3 buddy-alert">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Important</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Holidays</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Read Full</a>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    <?php
    include_once('includes/footer.php');
    ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>

</html>