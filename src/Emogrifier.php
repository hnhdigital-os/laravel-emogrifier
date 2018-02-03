<?php

namespace HnhDigital\Emogrifier;

use Pelago\Emogrifier as OriginalEmogrifier;

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
        $html = preg_replace('/<!--(.*?)-->/is', '', $html);
        $html = preg_replace('/(v|o|w)\\\\:\*(.*?)$/im', '', $html);
        $html = preg_replace('/content="(.*?)charset=(.*?);(.*?)"/im', 'content="charset=$2"', $html);
        $html = preg_replace('/@-webkit-keyframes(.*?){(.*?)}/im', '', $html);
        $html = preg_replace('/\* \[office365\](.*?){(.*?)}/im', '', $html);

        parent::setHtml($html);
    }
}
