<?php
/**
 * Redactor CP plugin for Craft CMS 3.x
 *
 * Adding an admin panel to quickly change the settings of the Redactor plugin.
 *
 * @link      https://theadhocracy.co.uk
 * @copyright Copyright (c) 2020 theAdhocracy
 */

namespace theadhocracy\redactorcp\models;

use theadhocracy\redactorcp\RedactorCp;

use Craft;
use craft\base\Model;

/**
 * RedactorCp Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    theAdhocracy
 * @package   RedactorCp
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
