<?php
namespace elnebuloso\FlexTest\Filter;

use elnebuloso\Flex\Filter\SanitizeFilename;
use PHPUnit_Framework_TestCase;

/**
 * Class SanitizeFilenameTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class SanitizeFilenameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testFilterWithExtension()
    {
        $filename = '../../The Quick-Brown-Fox with Number 123 !   ! ---- jumps ../../ over .jpg the river.jpg';

        $filter = new SanitizeFilename();
        $this->assertEquals('the-quick-brown-fox-with-number-123-jumps-over-jpg-the-river.jpg', $filter->filter($filename));
    }

    /**
     * @test
     */
    public function testFilterWithoutExtension()
    {
        $filename = '../../The Quick-Brown-Fox with Number 123 !   ! ---- jumps ../../ over .jpg the river';

        $filter = new SanitizeFilename();
        $this->assertEquals('the-quick-brown-fox-with-number-123-jumps-over-jpg-the-river', $filter->filter($filename));
    }
}
