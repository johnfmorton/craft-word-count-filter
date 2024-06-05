<?php
/**
 * Word Count Filter plugin for Craft CMS 5.x
 *
 * A Twig filter for counting words in a string of text.
 *
 * @link      https://johnfmorton.com
 * @package   WordCountFilter
 * @since     1.0.0
 * @license   Craft License
 * @see       https://craftcms.com/docs/3.x/extend/plugin-structure.html
 * @see       https://craftcms.com/docs/3.x/extend/twig-extensions.html
 * @copyright John F Morton
 */

namespace johnfmorton\craftwordcountfilter\twigextensions;
use Twig\ExpressionParser;
use Twig\Extension\AbstractExtension;

class WordCountTwigExtension extends AbstractExtension
{
    public function getName()
    {
        return 'Word Count Filter';
    }
    public function getFilters(): array
    {
        return [
            new \Twig\TwigFilter('wordCount', [$this, 'wordCount']),
        ];
    }

    public function wordCount($text): int
    {
        // Split the text into words
        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        // Count the words
        return count($words);
    }
}