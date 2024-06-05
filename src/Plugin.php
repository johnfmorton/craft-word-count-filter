<?php

namespace johnfmorton\craftwordcountfilter;

use Craft;
use craft\base\Plugin as BasePlugin;
use johnfmorton\craftwordcountfilter\twigextensions\WordCountTwigExtension;

/**
 * Word Count Filter plugin
 *
 * @method static Plugin getInstance()
 * @author John F Morton <john@johnfmorton.com>
 * @copyright John F Morton
 * @license https://craftcms.github.io/license/ Craft License
 */
class Plugin extends BasePlugin
{
    public string $schemaVersion = '1.0.0';

    public static function config(): array
    {
        return [
            'components' => [
                // Define component configs here...
            ],
        ];
    }

    public function init(): void
    {
        parent::init();

        // Register the WordCountTwigExtension
        Craft::$app->view->registerTwigExtension(new WordCountTwigExtension());

        Craft::info(
            Craft::t(
                'word-count-filter',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

}
