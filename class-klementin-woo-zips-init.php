<?php

class Klementin_Woo_Zips_init {


	public static function init() {
		add_action( 'admin_enqueue_scripts', array( self::class, 'load_assets' ) );
		add_action( 'wp_enqueue_scripts', array( self::class, 'load_assets' ) );

		/*$datas = json_decode(file_get_contents(KLEMENTIN_WOO_ZIP_PLUGIN_DIR.'/assets/zips/HU.json'),true);
		$newData = [];

		foreach ($datas as $data) {
			$newData[$data['zipcode']] = $data;
		}
		var_dump(file_put_contents(KLEMENTIN_WOO_ZIP_PLUGIN_DIR.'/assets/zips/HU.json',json_encode($newData)));
		var_dump($newData);die;*/

		( new Klementin_wp_ajax() )
			->add_ajaxurl()->add_ajax_action( 'klementin_woo_zips_zip_to_city', array(
				'Klementin_Woo_Zips_Search',
				'zip_to_city'
			), 'both' );

		( new Klementin_wp_nonce() )->prepare_for_ajax_nonce();
	}

	public static function load_assets() {
		wp_enqueue_script( 'klementin-woo-zips-frontend-script', plugin_dir_url( __FILE__ ) . 'assets/klementin-woo-zips-frontend-script.js', array( 'jquery' ), false, true );
	}


}