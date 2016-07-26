<?php
namespace elnebuloso\Flex\Filter;

/**
 * Class MinifyHtml
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class MinifyHtml
{
    /**
     * return filtered html
     * this removes about 30% of the page size by turning your html into
     * one line, no tabs, no new lines, no comments
     *
     * @param string $html
     * @return string
     */
    public function filter($html)
    {
        $html = preg_replace(
            [
                '/ {2,}/',
                '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s',
                '/>\s*/',
                '/\s*</',
            ],
            [
                ' ',
                '',
                '>',
                '<',
            ],
            $html
        );

        return $html;
    }
}
