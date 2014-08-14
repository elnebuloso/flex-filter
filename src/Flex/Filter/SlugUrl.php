<?php
namespace Flex\Filter;

/**
 * Class SlugUrl
 *
 * @package Flex\Filter
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class SlugUrl {

    /**
     * @param string $path
     * @return string
     */
    public function filter($path) {
        $path = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $path);
        $path = strtolower($path);
        $path = preg_replace('/\W+/', '-', $path);

        return $path;
    }
}