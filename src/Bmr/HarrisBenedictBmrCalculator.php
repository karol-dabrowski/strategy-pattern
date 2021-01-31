<?php

namespace App\Bmr;

use App\BmrCalculator;
use App\Gender;

class HarrisBenedictBmrCalculator implements BmrCalculator
{
	public function calculateBmr(int $weight, int $height, int $age, int $gender): float
	{
		if($gender === Gender::MALE) {
			return $this->calculateBmrForMen($weight, $height, $age);
		} else {
			return $this->calculateBmrForWomen($weight, $height, $age);
		}
	}

	private function calculateBmrForMen(int $weight, int $height, int $age): float
	{
		return 66.5 + (13.75 * $weight) + (5.003 * $height) - (6.755 * $age);
	}

	private function calculateBmrForWomen(int $weight, int $height, int $age): float
	{
		return 655 + (9.563 * $weight) + (1.850 * $height) - (4.676 * $age);
	}
}
