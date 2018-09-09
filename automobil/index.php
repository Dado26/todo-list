<?php

require 'motor.php';
require 'auto.php';

$Mercedes = new Auto;

$karavan = new Motor('spori');
$limuzina = new Motor('100');
$kabriolet = new Motor('120');

$Mercedes->addMotor($limuzina);
$Mercedes->addMotor($kabriolet);
$Mercedes->addMotor($karavan);




