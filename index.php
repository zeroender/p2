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

      <form method='POST' action='result.php'>

        <fieldset class='name'>
          <legend>Please enter your name (required)</legend>
          <label><input type='text' name='firstName' placeholder='First Name'></label>
          <label><input type='text' name='lastName' placeholder='Last Name'></label>
        </fieldset>

        <fieldset class='checkboxes'>
          <legend>Please indicate what days you are available to work</legend>
          <label><input type='checkbox' name='days[]' value='Monday'>Monday</label>
          <label><input type='checkbox' name='days[]' value='Tuesday'>Tuesday</label>
          <label><input type='checkbox' name='days[]' value='Wednesday'>Wednesday</label>
          <label><input type='checkbox' name='days[]' value='Thursday'>Thursday</label>
          <label><input type='checkbox' name='days[]' value='Friday'>Friday</label>
          <label><input type='checkbox' name='days[]' value='Saturday'>Saturday</label>
          <label><input type='checkbox' name='days[]' value='Sunday'>Sunday</label>
        </fieldset>

        <fieldset class='radios'>
          <legend>Please indicate if you are available to work nights (required)</legend>
          <label><input type='radio' name='nightsOk' value='yes'>Yes</label>
          <label><input type='radio' name='nightsOk' value='no'>No</label>
        </fieldset>



        <fieldset class='confirmation'>
          <legend>Double check your selections and click Confirm:</legend>
          <label><input type='submit' class='btn btn-primary' value='Confirm' name='Confirm'></label>
        </fieldset>

      </form>

    </div>

  </body>

</html>
