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

namespace somevendor\geolookup\variables;

use somevendor\geolookup\GeoLookup;

use Craft;

/**
 * Geo Lookup Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.geoLookup }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Paige Kato
 * @package   GeoLookup
 * @since     1.0.0
 */
class GeoLookupVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.geoLookup.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.geoLookup.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
