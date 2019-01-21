<?php namespace Hyx\Course;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
				'name'        => 'Course',
				'description' => 'PowerBuilder Fundamentals Course',
		];
	}
    public function registerComponents()
    {
    	return [
    			'Hyx\Course\Components\Course' => 'course',
    	];
    }

    public function registerSettings()
    {
    }
}
