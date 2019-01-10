<?php
/**
 * Geo Lookup plugin for Craft CMS 3.x
 *
 * 
A simple plugin to get information about your user's location for Craft 3 cms. This plugin utilizes IP Stack's API; a key is required.
 *
 * @link      https://github.com/paigekato
 * @copyright Copyright (c) 2019 Paige Kato
 */

namespace somevendor\geolookup\controllers;

use somevendor\geolookup\GeoLookup;

use Craft;
use craft\web\Controller;

/**
 * GeoLookup Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Paige Kato
 * @package   GeoLookup
 * @since     1.0.0
 */
class GeoLookupController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/geo-lookup/geo-lookup
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the GeoLookupController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/geo-lookup/geo-lookup/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the GeoLookupController actionDoSomething() method';

        return $result;
    }
}
