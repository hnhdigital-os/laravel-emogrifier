<?php

namespace HnhDigital\LaravelEmogrifier;

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
}
