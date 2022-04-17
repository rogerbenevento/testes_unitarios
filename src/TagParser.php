<?php

namespace App;

class TagParser
{
    public function parse(string $tags)
    {
        return preg_split('/ ?[,|] ?/', $tags);

        // php7.3
        // return array_map(function($tag) {
        //     return trim($tag);
        // }, $tags);

        // php7.4
        // return array_map(fn($tag) => trim($tag), $tags);
    }
}