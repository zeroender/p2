<?php

require('form.php');
require('helpers.php');


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

$fullName = $form->get("firstName").' '.$form->get("lastName");

$canWorkNights = $form->get("nightsOk");

if ($canWorkNights == 'yes')
{
    $canWorkNights = 'are';
}
else
{
    $canWorkNights = 'are not';
}

$daysToWork = $form->get('days');
