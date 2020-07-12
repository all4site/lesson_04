<?php

namespace App\one;

use App\abstracts\animals;
use App\traits\weight;

class one extends animals
{
	use weight;
	public $name = 'cat';

	public function render($data = [])
	{

		foreach ($data as $key => $value) {
			echo $key . ' = ' . $value . '<br>';
		}
	}

	public function data()
	{
		return date('d:m:y');
	}
}