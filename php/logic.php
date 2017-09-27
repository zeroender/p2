<?php

require('Form.php');
require('WorkWeekSchedule.php');

use DWA\Form;

$form = new Form($_POST);

if ($form->isSubmitted())
{
    $errors = $form->validate(
        [
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'nightsOk' => 'required'
        ]
    );
}

$schedule = new workWeekSchedule($form->get("firstName"), $form->get("lastName"),
    $form->get('days'), $form->get("nightsOk"));
