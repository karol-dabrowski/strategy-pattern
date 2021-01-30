<?php

namespace App;

interface ActivityLevel
{
	public const NO_ACTIVITY = 1.2;
	public const LIGHT_ACTIVITY = 1.375;
	public const MODERATE_ACTIVITY = 1.55;
	public const HIGH_ACTIVITY = 1.725;
	public const VERY_HIGH_ACTIVITY = 1.9;
}