<?php

namespace HnhDigital\Emogrifier;

use Pelago\Emogrifier as OriginalEmogrifier;
use ForceUTF8\Encoding;

class Emogrifier extends OriginalEmogrifier
{
    /**
     * Applies $this->css to $this->html and returns the HTML with the CSS
     * applied.
     *
     * This method places the CSS inline.
     *
     * @param string $html the HTML to emogrify, must be UTF-8-encoded
     * @param string $css  the CSS to merge, must be UTF-8-encoded
     *
     * @throws \BadMethodCallException
     *
     * @return string
     */
    public function parse($html, $css = '')
    {
        $this->setHtml($html);
        $this->setCss($css);

        return $this->emogrify();
    }

    /**
     * Clean the html before parsing.
     *
     * This removes common issues that will cause Emogrifier to throw an exception.
     *
     * @param string $html
     *
     * @return string
     */
    public function setHtml($html)
    {
        // Force any text to UTF8.
        $html = Encoding::toUTF8($html);

        // Remove inline comments.
        $html = preg_replace('/<!--(.*?)-->/is', '', $html);

        // Remove ?.
        $html = preg_replace('/(v|o|w)\\\\:\*(.*?)$/im', '', $html);

        // Remove any items in the content tag and replace with just the charset.
        $html = preg_replace('/content="(.*?)charset=(.*?);(.*?)"/im', 'content="charset=$2"', $html);

        // Remove webkit keyframes.
        $html = preg_replace('/@-webkit-keyframes(.*?){(.*?)}/im', '', $html);

        // Remove office365 tags.
        $html = preg_replace('/\* \[office365\](.*?){(.*?)}/im', '', $html);

        parent::setHtml($html);
    }

    /**
     * Parses the html/css and returns it so it can be placed inline within a page.
     *
     * @param string $html the HTML to emogrify, must be UTF-8-encoded
     * @param string $css  the CSS to merge, must be UTF-8-encoded
     *
     * @return string
     */
    public function parseInline($html, $css = '')
    {
        // Remove meta tags.
        $html = preg_replace("/<meta.*?>(.*?)(<\/meta>)?/i", '', $html);

        // Parse the html/css.
        $html = $this->parse($html, $css);

        // Remove any width setting.
        $html = preg_replace('/width:[ ]?(.*?)[;]?/im', '', $html);

        // Remove any extra spacing.
        $html = preg_replace("/<p><br><\/p>/is", '', $html);
        $html = preg_replace("/<div><br><\/div>/is", '<br>', $html);
        $html = preg_replace('/<br><br>/is', '<br>', $html);

        $html = str_replace('<!DOCTYPE html>', '', $html);

        // Remove html tags.
        $html = preg_replace("/<html(.*?)>(.*?)<\/html>/is", '$2', $html);

        // Remove head tags.
        $html = preg_replace("/<head(.*?)>(.*?)<\/head>/is", '', $html);

        // Remove body tags.
        $html = preg_replace("/<body(.*?)>(.*?)<\/body>/is", '$2', $html);

        // Remove style tags.
        $html = preg_replace("/<style.*?>(.*?)<\/style>/is", '', $html);

        // Remove base tag.
        $html = preg_replace('/<base.*?>/im', '', $html);

        // Remove any class attributes.
        $html = preg_replace('/<(.*?) class="(.*?)"(.*?)>/im', '<$1$3>', $html);

        // Remove any id attributes.
        $html = preg_replace('/<(.*?) id="(.*?)"(.*?)>/im', '<$1$3>', $html);

        return trim($html);
    }
}
