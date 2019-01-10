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

namespace somevendor\geolookup\models;

use somevendor\geolookup\GeoLookup;

use Craft;
use craft\base\Model;

/**
 * GeoLookup Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Paige Kato
 * @package   GeoLookup
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
