<?php
/**
 * Fired during plugin deactivation
 */
class Prelaunchr_Deactivator {

	/**
	 * Do stuff on deactivation
	 */
	public function deactivate() {

		flush_rewrite_rules();

	}

}