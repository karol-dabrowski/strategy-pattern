<?php

namespace App;

interface BmrCalculator
{
	public function calculateBmr(int $weight, int $height, int $age, int $gender): float;
}