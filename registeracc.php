<!DOCTYPE html>
<html>
<head>
  <title>Online Voting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/user.js"></script>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +91858585858</li>
        <li><i class="fa fa-envelope-o"></i> dummy@gmail.com </li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear">
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        <blockquote>
          <div>
            <?php
            require('connection.php');
            if (isset($_POST['submit'])) {
              $myFirstName = $mysqli->real_escape_string($_POST['firstname']);
              $myLastName = $mysqli->real_escape_string($_POST['lastname']);
              $myEmail = $mysqli->real_escape_string($_POST['email']);
              $myPassword = $_POST['password'];
              $myVoterid = $mysqli->real_escape_string($_POST['voter_id']);
              
              $confirmPassword = $_POST['ConfirmPassword'];
              if ($myPassword !== $confirmPassword) {
                die("Password confirmation doesn't match.");
              }

              $newpass = password_hash($myPassword, PASSWORD_DEFAULT);

              $sql = "INSERT INTO tbMembers(first_name, last_name, email, voter_id, password) VALUES ('$myFirstName','$myLastName', '$myEmail','$myVoterid', '$newpass')";
              if ($mysqli->query($sql)) {
                echo "You have registered for an account.<br><br>Go to <a href=\"login.php\">Login</a>";
              } else {
                die("Error: " . $mysqli->error);
              }
            }
            echo "<center><h3>Register an account by filling in the needed information below:</h3></center>";
            ?>
          </div> 
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onSubmit="return registerValidate(this)">
            <table style="background-color:powderblue;" width="300" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td>
                  <table style="background-color:powderblue;" width="100%" border="0" cellpadding="3" cellspacing="1">
                    <tr>
                      <td style="color:#000000"; width="120" >First Name</td>
                      <td style="color:#000000"; width="6">:</td>
                      <td style="color:#000000"; width="294"><input name="firstname" type="text" ></td>
                    </tr>
                    <!-- Repeat similar rows for other fields -->
                    <!-- Ensure password fields match -->
                  </table>
                </td>
              </tr>
            </table>
            <center>
              <br>Already have an account? <a href="login.php"><b>Login Here</b></a>
            </center>
          </form>
        </blockquote>
      </li>
    </ul>
  </section>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
            <p>
              Name        : Swanand Pisu <br>
              University  : MIT WPU <br>
              Batch       : 2023-25 <br>
              Dept        : School Of Computer Science <br>
            </p>
          </address>
        </li>
      </ul>
    </div>
    <!-- Repeat similar blocks for Phone and Email -->
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.placeholder.min.js"></script>
</body>
</html>
