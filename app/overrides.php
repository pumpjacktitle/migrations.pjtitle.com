<?php
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

$app = app();

/*
|--------------------------------------------------------------------------
| Route Overrides
|--------------------------------------------------------------------------
|
| Because we use an internal REST API, you have the ability to override
| any route for an API call to your own logic. This makes extending
| Platform extremely easy and can be done from anywhere.
|
*/

Route::group(array('prefix' => '{api}/v1'), function() use ($app)
{
	// Override an API route
});

// Only route admin routes if the admin extension is installed
if (function_exists('admin_uri'))
{
	Route::group(array('prefix' => admin_uri()), function() use ($app)
	{
		// Override an admin route
	});
}

/*
|--------------------------------------------------------------------------
| Model Overrides
|--------------------------------------------------------------------------
|
| The default Platform extensions use the IoC to resolve model instances.
| You can override these here by simply returning your own model which
| extends ours.
|
*/

// Extension: platform/attributes
// $app['Platform\Attributes\Attribute'] = new My\Platform\Attributes\Attribute;
// $app['Platform\Attributes\Value']     = new My\Platform\Attributes\Value;

// Extension: platform/content
// $app['Platform\Content\Content'] = new My\Platform\Content\Content;

// Extension: platform/menus
// $app['Platform\Menus\Menu'] = new My\Platform\Menus\Menu;

// Extension: platform/pages
// $app['Platform\Pages\Page'] = new My\Platform\Pages\Page;

// Extension: platform/users
// $app['Platform\Users\Group'] = new My\Platform\Users\Group;
// $app['Platform\Users\User']  = new My\Platform\Users\User;

/*
|--------------------------------------------------------------------------
| Service Overrides
|--------------------------------------------------------------------------
|
| Each Service Provider and Extension registers a number of application
| services. This is a great spot to easily override these to customize
| the behavior of your Platform application.
|
*/

/*
$app['foo.bar'] = $app->share(function($app)
{
	return new My\Foo\Bar;
});
*/
