<?php
namespace elnebuloso\FlexTest\Filter;

use elnebuloso\Flex\Filter\MinifyHtml;
use PHPUnit_Framework_TestCase;

/**
 * Class MinifyHtmlTest
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class MinifyHtmlTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testFilter()
    {
        $expexted = "<html><foo></foo><foo>baz</foo><bar>bla blubb</bar><bar>bla blubb</bar></html>";

        $html = "<!-- my comment --><html> <foo>    </foo>      <foo>   baz     </foo>
        	<bar>   bla blubb     </bar>
        		<bar>  bla   blubb</bar><!-- my comment -->
        	</html>";

        $filter = new MinifyHtml();
        $this->assertEquals($expexted, $filter->filter($html));
    }
}
