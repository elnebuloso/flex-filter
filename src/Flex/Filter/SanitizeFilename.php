<?php
namespace Flex\Filter;

/**
 * Class SanitizeFilename
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class SanitizeFilename {

    /**
     * @param string $filename
     * @return string
     */
    public function filter($filename) {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // remove possible suffix from path
        if(!empty($extension) && !preg_match('/\s/', $extension)) {
            $filename = substr($filename, 0, strrpos($filename, "."));
        }

        // replace all invalid chars with whitespaces
        $filename = preg_replace('/[^a-zA-Z0-9]/', ' ', $filename);

        // replace multiple whitespaces to single whitespace
        $filename = preg_replace('/\s\s+/', ' ', $filename);

        // trim, replace whitespaces and lowercase new filename
        $filename = trim($filename);
        $filename = str_replace(' ', '-', $filename);
        $filename = strtolower($filename);

        if(!empty($extension) && !preg_match('/\s/', $extension)) {
            $filename .= ".$extension";
        }

        return $filename;
    }
}