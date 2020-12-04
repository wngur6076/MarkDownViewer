<?php

if (! function_exists('markdown')) {
    function markdown($text = null)
    {
        return app(Parsedown::class)->text($text);
    }
}
