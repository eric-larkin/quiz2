<?php
  $cookieSet = FALSE;
  $email = "";
  $name = "";
  if(isset($_COOKIE['submittedForm'])) {
    $data = json_decode($_COOKIE['submittedForm'], true);
    $name = $data['fName'];
    $email = $data['email'];
    $cookieSet = TRUE;
  }
?>
<html>
  <head>
    <title>Welcome.php</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>
    <form action="php/register.php" method="POST">
      <?php
        if($cookieSet) : ?>
        <div class="container">
          <div class="inputItem">
            <p>
              <?php echo "Hi, " . $name . ", you recently signed up with the email address " . $email .
              ", thank you!" ?>
            </p>
          </div>
        </div>
      <?php else : ?>
        <div class="container">
          <div class="inputItem">
            <p>First Name</p>
            <input type="text" name="fName" />
          </div>

          <div class="inputItem">
            <p>Last Name</p>
            <input type="text" name="lName" />
          </div>

          <div class="inputItem">
            <p>Email Address</p>
            <input type="email" name="email" />
          </div>

          <div class="inputItem">
            <p>Write one line about yourself.</p>
            <input type="text" name="bio" />
          </div>

          <div class="inputItem">
            <p>Degree:</p>
            <select name="degree">
              <option value="CS">CS</option>
              <option value="other">I wouldn't dare pick anything else</option>
            </select>
          </div>

          <button type="submit" name="submitButton">Submit Form</button>
        </div>
      <?php endif ?>
    </form>
    </div>
  </body>
</html>
