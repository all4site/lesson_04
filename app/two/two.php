<?php
namespace App\two;

use App\abstracts\animals;
use App\interfaces\lower;
use App\traits\weight;

class two extends animals implements lower
{
	use weight;
	public $name = 'fish';

	public function tolower($data)
	{
		$data = mb_strtolower($data);
		return $data;
	}

	public function data()
	{
		return date('d:m:y');
	}
}