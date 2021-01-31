<?php

require __DIR__ . '/vendor/autoload.php';

use App\CalorieCalculator;
use App\Bmr\HarrisBenedictBmrCalculator;
use App\ActivityLevel;
use App\Gender;

$harrisBenedictCalculator = new HarrisBenedictBmrCalculator();
$calculator1 = new CalorieCalculator($harrisBenedictCalculator);

echo 'Harris-Benedict: ';
echo $calculator1->calculate(86, 191, 27, Gender::MALE, ActivityLevel::HIGH_ACTIVITY);
