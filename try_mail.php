<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Linda Nyika ',
    'mail_from' => 'linda.nyika@gmail.com',
    'name_to' => 'Nyika Linda',
    'mail_to' => 'nyikalinda3@gmail.com',
    'subject' => 'Welcome to Task App',
    'body' => 'This is a new semester <b>Let\'s get started!</b>'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);