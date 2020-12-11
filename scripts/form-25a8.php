<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;preethi4848.github.io&#x2F;page&#x2F;',
    'to' => 'preethiaushi@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'name-1' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'message' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    'text' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'text',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'text\' is required.'
    )
    ),
    'select' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    'select-1' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'select-1',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'select-1\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>