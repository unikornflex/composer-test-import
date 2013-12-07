FB APP TEMPLATE
============================================================

- install composer : http://getcomposer.org/doc/00-intro.md#installation-nix
(note: install globally)

- install slim with composer : http://www.slimframework.com/install

- create a .gitignore

- install and configure sass with html5bp
	http://thesassway.com/beginner/getting-started-with-sass-and-compass
	https://github.com/sporkd/compass-h5bp
	to install : http://compass-style.org/help/tutorials/spriting/

@TODO
- use composer with our own packages : 
	http://blog.bobbyallen.me/2013/03/23/using-composer-in-your-own-php-projects-with-your-own-git-packageslibraries/
- install 
	grunt
	require
	bower ?
- see how to configure the autoloader to find files in app/lib/ folder => configure composer
- exclude a External and a UFO folder from the .gitignore to import non PSR-0 classes and unikorn lib
- create a namespaced wrapped for the Mobile_Detect class


External PHP librairies proposal :
---------------------------------------------------------------

Mobile_Detect (needs to be wrapped for use with composer and autoload)
Monolog
SwiftMailer

PHP librairies to developp :
---------------------------------------------------------------

DbFactory (done - needs to be modified for use with composer)
AbstractModel
AbstractCollection
Templater


file system proposal for app/ directory :
(inspired from : http://www.slimframework.com/news/how-to-organize-a-large-slim-framework-application)

```
config/
	note :
		- use http://symfony.com/doc/current/components/yaml/introduction.html for config files ?
app/
	lib/
	routes/
	templates/
	data/
	assets/
		sass/
		img/
	
	notes : 
		- find a way to include templates dynamically
		- add a "module" level (front/back)

vendor/

public_html/
	js/
		config/
		templates/
		app/
		vendor/
		mains.js
	css/
	img/

	index.php		  ( make all php error die silently php_error(E_NONE) )
	index_dev.php ( ip filtering like symfony - php_error(E_ALL) - import a function dump($arg, $die = false) {} )

...




```




