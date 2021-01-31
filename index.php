<?php

require __DIR__ . '/vendor/autoload.php';

use App\CalorieCalculator;
use App\Bmr\HarrisBenedictBmrCalculator;
use App\Bmr\MiffinStJeorBmrCalculator;
use App\ActivityLevel;
use App\Gender;

$harrisBenedictCalculator = new HarrisBenedictBmrCalculator();
$calculator1 = new CalorieCalculator($harrisBenedictCalculator);

$miffinStJeorCalculator = new MiffinStJeorBmrCalculator();
$calculator2 = new CalorieCalculator($miffinStJeorCalculator);

echo 'Man (86kg, 191cm, 27y, high activity) - Harris-Benedict algorithm: ';
echo $calculator1->calculate(86, 191, 27, Gender::MALE, ActivityLevel::HIGH_ACTIVITY);
echo 'kcal';

echo '<br />';

echo 'Woman (54kg, 165cm, 22y, light activity) - Miffin-St. Jeor algorithm: ';
echo $calculator2->calculate(54, 165, 22, Gender::FEMALE, ActivityLevel::LIGHT_ACTIVITY);
echo 'kcal';
