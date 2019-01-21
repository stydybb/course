<?php namespace Hyx\Course\Updates;
use Carbon\Carbon;
use Hyx\Course\Models\Course;
use October\Rain\Database\Updates\Seeder;
class SeedAllTables extends Seeder
{
	public function run(){
		Course::create([
		'title'=>'Intro and Setup',
		'body'=>'<p class=\"rtecenter\">\r\n	<iframe allowfullscreen=\"\" class=\"tscplayer_inline embeddedObject\" frameborder=\"0\" height=\"560\" mozallowfullscreen=\"\" name=\"tsc_player\" scrolling=\"no\" src=\"https://www.screencast.com/users/Appeon/folders/PowerBuilder Fundamentals/media/2a8e4daa-dc8a-42c7-bd77-b2626587052e/embed\" style=\"overflow:hidden;\" type=\"text/html\" webkitallowfullscreen=\"\" width=\"820\"></iframe>\r\n</p>',
		'categoryid'=>'Unit',
		'unit'=>'PowerBuilder Fundamentals Unit 00'
		]);
	}
	
}