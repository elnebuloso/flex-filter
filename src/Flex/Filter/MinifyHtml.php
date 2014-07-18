<?php
namespace Flex\Filter;

/**
 * Class MinifyHtml
 *
 * @package Flex\Filter
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class MinifyHtml {

    /**
     * return filtered html
     * this removes about 30% of the page size by turning your html into
     * one line, no tabs, no new lines, no comments
     *
     * @param string $html
     * @return string
     */
    public function filter($html) {
        $html = preg_replace(array(
            '/ {2,}/',
            '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s',
            '/>\s*/',
            '/\s*</'
        ), array(
            ' ',
            '',
            '>',
            '<'
        ), $html);

        return $html;
    }
}