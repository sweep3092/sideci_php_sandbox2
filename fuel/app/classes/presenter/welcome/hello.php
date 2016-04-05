<?php

/**
 * The welcome hello presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Welcome_Hello extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
    $hogehogehoge="fugafugafuga";

    $hogehoge = "jdoaisjglkl,.,m.,m.,m.";
    $this->name = $this->request()->param('name', 'World');
	}
}
