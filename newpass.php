<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Change Password</title>
</head>
<body>
    <div>
        <img id="img2" src="images/pass.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%; margin-top: 20vh;">
    </div>
    <img src="images/about.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php'; ?>
    <div class="content">
        <br> <br> 
        <h1 align="center" style="margin-left: 50px;">Forgot Password?</h1> <br>
        <br><br>
        <div class="row justify-content-center">
            <form action="includes/newpass.php" autocomplete="off" method="POST">
                <input type="password" style="display: none;" autocomplete="false">

                <div class="center">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Enter Password" style="width: 270px;">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="password2" placeholder="Confirm Password" style="width: 270px;">
                    </div>
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
                    <button type="submit" class="btn" name="confirm" style="color: white; font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Change</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#add").removeClass("active");
            $("#change").addClass("active");
        });
    </script>
</body>
</html>
