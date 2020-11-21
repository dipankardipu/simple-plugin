<?php

use \Testclasss\SimplePlugin_Plugin;

/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {
	
	protected $loader;
	public function setup () {
        parent::setup();        
       $this->loader = new SimplePlugin_Plugin();
    }

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
	public function test_init_no_site_init() {	
        
        $this->loader->init();
        
        $this->assertEquals(10, has_action ( 'init' ,array($this->loader, 'wp_init' )) ); 

       

}

	public function test_wp_init() {	
		 $this->loader->wp_init();
 $this->assertEquals(10, has_action ( 'admin_enqueue_scripts', array (
				$this->loader,
				'enqueue_assets' 
		)  ) ); 
		 
	 /*$this->assertFalse(  has_action  ( 'admin_enqueue_scripts', array (
				$this->loader,
				'enqueue_assets' 
		) ) );        
        
        $this->loader->wp_init();

        $this->assertTrue( 
          has_action  ( 'admin_enqueue_scripts', array (
				$this->loader,
				'enqueue_assets' 
		) ) );*/

}
		public function test_enqueue_assets() {
		wp_dequeue_script( 'simple-plugin-admin-scripts' );
		wp_dequeue_style( 'simple-plugin-admin-style' );

		$this->loader->enqueue_assets();

		$this->assertTrue( wp_script_is( 'simple-plugin-admin-scripts' ) );
		$this->assertTrue( wp_style_is( 'simple-plugin-admin-style' ) );
	}
	
}
