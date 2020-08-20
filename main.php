<?php

namespace AntiPatterns\Multiton;

require_once "vendor/autoload.php";

print (FirstSingleton::getInstance() === SecondSingleton::getInstance()) ?: "Multiton \n";
