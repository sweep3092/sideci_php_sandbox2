<?php

/**
 * The welcome 404 presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Welcome_404 extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		$fufufu = "jjkpowek;rlwke;lk;lk;lk";
		$fddufufu = "jjkpowek;rlwke;lk;lk;lk";
		$fufddufu = "jjkpowek;rlwke;lk;lk;lk";
		$fufufddddu = "jjkpowek;rlwke;lk;lk;lk";


		$fufu123fddddu = "jjkpowek;rlwke;lk";

		$fufufddd123123d111u = "jjkpowek;rlwke;lk;lk;lk";
		$fufufdddasd111u = "jjkpowek;rlwke;lk;lk;lk";

		$fufuddddfdddd111u = "jjkpowek;rlwke;lk;lk;lk";

		$fdddufufdddd111u = "jjkpowek;rlwke;lk;lk;lk";


		$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
		$this->title = $messages[array_rand($messages)];
	}
}
