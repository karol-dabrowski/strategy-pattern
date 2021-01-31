<?php

namespace App\Bmr;

use App\BmrCalculator;
use App\Gender;

class MiffinStJeorBmrCalculator implements BmrCalculator
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
		return (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
	}

	private function calculateBmrForWomen(int $weight, int $height, int $age): float
	{
		return (10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
	}
}
