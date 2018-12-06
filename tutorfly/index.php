<!DOCTYPE html>
<?php
    if($_POST['email'] != '') {
        $subject = "New Email Entered";
        $text = "New email - ".$_POST['email'];
        $email = 'andrew@tutorfly.org';
        $email2 = 'info@tutorfly.org';

        mail($email, $subject, $text);
        mail($email2, $subject, $text);

    }
?>

<html>
    <head>
        <title>Sign up for updates!</title>

        <link href="https://fonts.googleapis.com/css?family=Open&20Sans" rel="stylesheet">
        <script src="jquery-3.1.0.min.js"></script>

        <style type="text/css">
            body {
                margin: 0px;
                padding: 0px;
            }
            .topbar {
                background-color: #232628;
                padding: 11px 50px 11px 5px;
                width: 100%;
                height: 40px;
                position: fixed;
                box-shadow: 0px 3px 20px #232628;
                z-index: 100;
            }

            .topbar-item-div {
                float: right;
                margin-right: 50px;
            }

            .logo {
                height: 40px;
            }

            .topbar-item {
                color: white;
                font-family: "Open Sans";
                float: right;
                margin-top: 8px;
                text-decoration: none;
                margin-left: 30px;
                padding-bottom: 5px;
                font-weight: 500;
            }

            .topbar-item:hover {
                border-bottom: 3px solid white;
            }

            .tagline {
                font-family: 'Helvetica Neue';
                font-size: 54px;
                color: white;
                text-shadow: 2px 2px #3689c4;
                position: absolute;
                top: 100px;
                left: 20%;
                font-weight: normal;
            }

            .subtagline {
                font-family: 'Helvetica Neue';
                color: #e0e0e0;
                font-size: 20px;
                text-shadow: 2px 2px #3689c4;
                position: absolute;
                top: 320px;
                left: 20%;
            }

            .form {
                position: absolute;
                top: 450px;
                width: 100%;
            }

            .form-email {
                margin-left: 20%;
                width: 50%;
                height: 50px;
                border: none;
                background-color: white;
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
                font-family: "Open Sans";
                font-weight: 600;
                font-size: 16px;
                color: black;
                padding-left: 20px;
            }

            .form-button {
                width: 10%;
                height: 50px !important;
                border: 1px solid #FDA734;
                background-color: #FDA734;
                color: white;
                font-family: "Open Sans";
                font-weight: 600;
                font-size: 16px;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .form-button:hover {
                background-color: white;
                color: #FDA734;
            }

            .footer {
                background-color: #2D495B;
                height: 200px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="topbar">
            <a href="http://tutorfly.org"><img src="logo.png" class="logo"/></a>
            <div class="topbar-item-div">
                <a href="https://tutorfly.herokuapp.com/signup" class="topbar-item">Sign Up</a>
                <a href="https://tutorfly.herokuapp.com/pricing" class="topbar-item">Pricing</a>
                <a href="https://tutorfly.herokuapp.com/about-us" class="topbar-item">About Us</a>
                <a href="https://tutorfly.herokuapp.com/apply-to-tutor" class="topbar-item">Apply as a Tutor</a>
                <a href="https://tutorfly.herokuapp.com/find-a-tutor" class="topbar-item">Browse Tutors</a>
            </div>
        </div>

        <img src="royce.jpg" width="100%" style="position: relative; z-index: -2;"/>

        <h1 class="tagline">Experienced Peer Tutors.<br/>In Person Sessions.<br/>No Long Term Commitments.<?php echo $_GET['school']; ?></h1>
        <p class="subtagline">Everyone should have access to first-rate education.<br/>Tutorfly can connect you to exceptional tutors today.</p>
        <form class="form" method="post">
            <input class="form-email" type="email" name="email" placeholder="Email" <?php
                if($_POST['email'] != '') {
                    echo 'value="Thank you! Your response has been recorded." style="color: green !important;"';
                }
            ?>/>
            <input class="form-button" type="submit" name="submit" value="Notify me!"/>
        </form>

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

        <div class="footer">
            <img src="logo.png" style="margin-left: 35%; width: 30%; margin-top: 50px;"/>
        </div>
        <script>

            var width = window.innerWidth;
            if(width < 800) {
                $(".topbar-item-div").css("opacity", "0");
            } else {
                $(".topbar-item-div").css("opacity", "1");
            }

            if(width < 1150) {
                $(".tagline").css("opacity", "0");
                $(".subtagline").css("opacity", "0");
                $(".form").css("top", "100px");
                $(".form-email").css("marginLeft", "10%");
                $(".form-email").css("width", "55%");
                $(".form-button").css("width", "25%");
            } else {
                $(".tagline").css("opacity", "1");
                $(".subtagline").css("opacity", "1");
                $(".form").css("top", "450px");
                $(".form-email").css("marginLeft", "20%");
                $(".form-email").css("width", "50%");
                $(".form-button").css("width", "10%");
            }

            window.onresize = function(event) {
                var width = window.innerWidth;
                if(width < 800) {
                    $(".topbar-item-div").css("opacity", "0");
                } else {
                    $(".topbar-item-div").css("opacity", "1");
                }

                if(width < 1150) {
                    $(".tagline").css("opacity", "0");
                    $(".subtagline").css("opacity", "0");
                    $(".form").css("top", "100px");
                    $(".form-email").css("marginLeft", "10%");
                    $(".form-email").css("width", "55%");
                    $(".form-button").css("width", "25%");
                } else {
                    $(".tagline").css("opacity", "1");
                    $(".subtagline").css("opacity", "1");
                    $(".form").css("top", "450px");
                    $(".form-email").css("marginLeft", "20%");
                    $(".form-email").css("width", "50%");
                    $(".form-button").css("width", "10%");
                }
            };
        </script>
    </body>
</html>
