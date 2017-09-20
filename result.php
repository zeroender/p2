<?php require('php/calendar.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Work Schedule Application - P2</title>
    <meta charset="utf-8">
    <!-- Begin bootstrap css and JS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End bootstrap css and JS -->

    <link href='/css/styles.css' rel='stylesheet'>

  </head>

  <body>

    <div class='container'>

      <h3>Work Schedule Application</h3>

      <img src='/images/calendar.jpg' alt='An Image of a Calendar'/>

      <?php if ($displayAll != true) : ?>
        <div class="alert alert-warning">Uh oh!  You've reached this page in error!</div>
        <div class="alert alert-warning">Please return to the registration page and be sure to fill out all required fields</div>
        <a href="index.php"><button class='btn btn-primary'>Head back to registration page</button></a>
        <?php return false;?>
      <?php endif; ?>

      <div class="alert alert-success">Hello <?=$fullName?>, your weekly schedule has been registered</div>

      <?php if ($workDays == 'None') : ?>
        <h4>Sounds like you're not available to work this week.</h4>
      <?php else: ?>
        <h4>You are signed up to work the following days:</h4>
        <?php foreach ($workDays as $dayNo => $day) : ?>
          <p><?=$day?></p>
        <?php endforeach; ?>
        <p>You indicated that you <?=$canWorkNights?> available to work nights</p>
      <?php endif; ?>

      <a href="index.php"><button class='btn btn-primary'>Head back to registration page</button></a>

    </div>

  </body>
