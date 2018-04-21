<?php
  $msg = '';
  $msgClass = '';


  if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      }else {
        $toEmail = 'info@neupytech.com';
        $subject = 'Request from '.$name;
        $body = '<h2>Request</h2>
                <h3>Name</h3><p>'.$name.'</p>
                <h3>Email</h3><p>'.$email.'</p>
                <h3>Message</h3><p>'.$message.'</p>
        ';

        $headers = "MIME-Version: 1.0" ."\r\n";
        #$headers .="Content-Type:text/html"; charset=UTF-8 . "
          #\r\n";

        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        }else {
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    }else {
      $msg = 'Please fill out all fields';
      $msgClass = 'alert-danger';
    }
  }

 ?>

<?php include 'includes/header.php'?>


<!-- Contact Form
==================
-->

<div class="form-container">
    <div class="form-header">
        <h2 class="text-center display-4">Get In Touch</h2>
    </div>

      <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Fullname" value="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="textarea">Message</label>
          <textarea class="form-control" id="textarea" name="message" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" name="deal" class="form-check-input" id="deal" value="deal">
            <label class="form-check-label" for="deal">Inform me about latest deals</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include 'includes/footer.php'?>