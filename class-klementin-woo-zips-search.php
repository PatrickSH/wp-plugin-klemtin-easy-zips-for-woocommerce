<?php


class Klementin_Woo_Zips_Search {


	public static function zip_to_city() {

		$codes = json_decode( file_get_contents( KLEMENTIN_WOO_ZIP_PLUGIN_DIR . '/assets/zips/' . $_REQUEST['country'] . '.json' ), true );
		$zip   = $_REQUEST['zip'];

		if ( isset( $codes[ $zip ] ) ) {
			echo $codes[ $zip ]['place'] ?? 0;
		} else {
			$codes_with_trimmed_keys = array();

			foreach ( $codes as $zip_code_to_trim => $code ) {
				$codes_with_trimmed_keys[ str_replace( ' ', '',$zip_code_to_trim) ] = $code;
			}
			echo $codes_with_trimmed_keys[ $zip ]['place'] ?? 0;
		}


		wp_die();
	}


}