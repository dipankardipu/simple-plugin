<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}
	public function test_constants () {
        $this->assertSame( 'wp-simple-plugin', WPSP_NAME );

        $url = str_replace( 'tests/', '',
                trailingslashit( plugin_dir_url( __FILE__ ) ) );
        $this->assertSame( $url, WPSP_URL );
    }
}
