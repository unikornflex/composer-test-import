FACEBOOK APP TEMPLATE FOR UNICORNS
============================================================

- install composer : http://getcomposer.org/doc/00-intro.md#installation-nix
(note: install globally)

- install slim with composer : http://www.slimframework.com/install

- create a .gitignore

- install and configure sass with html5bp
	http://thesassway.com/beginner/getting-started-with-sass-and-compass
	https://github.com/sporkd/compass-h5bp

@TODO
- install 
	compass/sass: import problem with internals filess
	grunt
	require
	bower ?
- see how to configure the autoloader to find files in app/lib/ folder
- exclude a External and a UFO folder from the .gitignore to import non PSR-0 classes and unikorn lib
- create a namespaced wrapped for the Mobile_Detect class


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




