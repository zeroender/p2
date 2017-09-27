<?php require('php/logic.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Work Schedule Application - P2</title>
    <meta charset="utf-8">
    <!-- Begin bootstrap css and JS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- End bootstrap css and JS -->

    <link href='/css/styles.css' rel='stylesheet'>

</head>

<body>

<div class='container'>

    <h3>Work Schedule Application</h3>

    <img src='/images/calendar.jpg' alt='An Image of a Calendar'/>

    <?php if ($form->isSubmitted() == false) : ?>
        <div class='alert alert-danger'>
            <p>It looks like there was an error submitting the form</p>
            <p>Please return to the registration page and fill out all required fields</p>
        </div>
    <?php elseif ($form->hasErrors) : ?>
        <div class='alert alert-danger'>
            <p>There were error(s) with your submission:</p>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <p>Please return to the registration page and fill out all required fields</p>
        </div>
    <?php else : ?>
        <div class="alert alert-success">
            <h4>Hello <?= $schedule->getFullName() ?>, your weekly schedule has been registered</h4>

            <?php if (isset($daysToWork)) : ?>
                <h4>You are signed up to work the following days:</h4>
                <?php foreach ($schedule->getDaysToWork() as $dayNo => $day) : ?>
                    <p><?= $day ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <h4>Sounds like you're not available to work this week.</h4>
            <?php endif; ?>
            <h4>When asked if you could work nights, you responded <?= $schedule->getWorkNights() ?> </h4>
        </div>
    <?php endif; ?>

    <a href="index.php">Head back to registration page</a>

</div>

</body>