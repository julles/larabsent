<?php namespace App\Larabsent\Source;

use App\Larabsent\Source\Config;

class Larabsent extends Config
{

	public function config($value = [])
	{
		$attribute = $this->settings();

		foreach($value  as $key)
		{
			return $attribute[$key];;
		}
	}

	public function assetUrl($path)
	{
		return asset($path);
	}

	public function contents()
	{
		return 'contents';
	}

}