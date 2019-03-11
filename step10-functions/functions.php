<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function getage($age, $hoursWorked)
		{
			if ($hoursWorked <= 40)
				return round(($hourlyWage * $hoursWorked), 2);
			else
                return round((($hourlyWage * 40) +
						($hourlyWage * 1.5 * ($hoursWorked - 40))), 2);
		}

else return false;