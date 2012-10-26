<?php //use BFlickr\phpFlickr;

class Bflickr_Access_Controller extends Controller {

	public function action_connect()
	{
		//Nos conectamos a Flickr
		$f = new phpFlickr('93112056337922cb0cb5f03e083fb434','d6857e8c4152d100',true);
	        $f->auth("write", false);
	}

	public function action_callback($frob)
	{
		// Recupermos la key de vuelta de flick y seguiñmos.
		echo $frob;
		//return View::make('bflickr.access.index');
	}
	public function action_index(){
		$aliases = Config::get('application.aliases');

		$new_line = '<br>';

		echo '<?php'.$new_line.$new_line;

		foreach ($aliases as $alias => $name_space)
		{
		    echo 'class '.$alias.' extends '.$name_space.'{};'.$new_line;
		}
	}
}
