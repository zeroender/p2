<?php

require('helpers.php');

$displayAll = false;

if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['nightsOk'])) {
  $fullName = sanitize($_POST['firstName']);
  $fullName .= ' ';
  $fullName .= sanitize($_POST['lastName']);
  if (!empty($_POST['days'])) {
    $workDays = $_POST['days'];
  } else {
    $workDays = 'None';
  }

  if ($_POST['nightsOk'] == 'yes'){
    $canWorkNights = 'are';
  } else {
    $canWorkNights = 'are not';
  }

  $displayAll = true;
}
