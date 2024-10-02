<?php

require_once __DIR__ . '/../vendor/autoload.php';

$employe1 = new \App\Employe("Adrien", "Bruyere", 18);
$employe1->presenter();