<?php

$response = null;

  if (!empty($_GET['msg'])) {

    switch($_REQUEST['msg']) {
        case '1':
          $response = 'Good job, the reCaptcha was solved succefully!';
          break;
        case '2':
          $response = 'Verification failed, please try again!';
          break;
        case '3':
          $response = 'Solve the reCaptcha first to get my success message :D';
          break;
    }
  }

?>

<html>
  <head>
    <title>Google reCAPTCHA w/ PHP</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <h1>Google reCAPTCHA w/ PHP - Demo Form</h1>
    <br>
    <h4><?php echo $response;?></h4>
    <br>
    <form action="post.php" method="POST">
      <div class="g-recaptcha" data-sitekey="your-sitekey-here"></div>
      <br/>
      <input type="submit" value="Send">
    </form>
  </body>
</html>
