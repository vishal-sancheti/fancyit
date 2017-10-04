# FancyIt
A package to generate fancy string from normal string

Require this package, with Composer, in the root directory of your project.

`$ composer require v1shky/fancyit`

Add the service provider to config/app.php in the providers array, or if you're using Laravel 5.5, this can be done via the automatic package discovery.

`V1shky\Fancyit\FancyitServiceProvider::class`

If you want you can use the facade. Add the reference in config/app.php to your aliases array.

`'Fancyit' => \V1shky\Fancyit\FancyitFacade::class`

**Usage**

`return Fancyit::convert('Hello');`