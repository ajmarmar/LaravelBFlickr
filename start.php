<?php
/*
|Carga de Nombre de espacios.
|

Autoloader::namespaces(array(
	//'BFlickr'   => Bundle::path('bflickr').'libraries',
));
*/

/*
|--------------------------------------------------------------------------
| Auto-Loader Mappings
|--------------------------------------------------------------------------
|
| Laravel uses a simple array of class to path mappings to drive the class
| auto-loader. This simple approach helps avoid the performance problems
| of searching through directories by convention.
|
| Registering a mapping couldn't be easier. Just pass an array of class
| to path maps into the "map" function of Autoloader. Then, when you
| want to use that class, just use it. It's simple!
|
*/

Autoloader::map(array(
	'phpFlickr' => Bundle::path('bflickr').'libraries'.DS.'phpFlickr.php',
	'phpFlickr_pager' => Bundle::path('bflickr').'libraries'.DS.'phpFlickr_pager.php',
));

/*
|--------------------------------------------------------------------------
| Auto-Loader Directories
|--------------------------------------------------------------------------
|
| The Laravel auto-loader can search directories for files using the PSR-0
| naming convention. This convention basically organizes classes by using
| the class namespace to indicate the directory structure.
|
*/

Autoloader::directories(array(
//	Bundle::path('bflickr').'libraries',
));
