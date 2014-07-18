<?php
namespace FlexTest\Filter;

use Flex\Filter\MinifyHtml;

/**
 * Class MinifyHtmlTest
 *
 * @package FlexTest\Filter
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class MinifyHtmlTest extends \PHPUnit_Framework_TestCase {

    /**
     * @return void
     */
    public function test_filter() {
        $expexted = "<html><foo></foo><foo>baz</foo><bar>bla blubb</bar><bar>bla blubb</bar></html>";

        $html = "<html> <foo>    </foo>      <foo>   baz     </foo>
        	<bar>   bla blubb     </bar>
        		<bar>  bla   blubb</bar>
        	</html>";

        $filter = new MinifyHtml();
        $this->assertEquals($expexted, $filter->filter($html));
    }
}