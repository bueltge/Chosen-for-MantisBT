<?php
class ChosenPlugin extends MantisPlugin {

	/**
	 * A method that populates the plugin information and minimum requirements.
	 * 
	 * @return  void
	 */
	public function register() {
		
		$this->name        = plugin_lang_get( 'title' );
		$this->description = plugin_lang_get( 'description' );
		$this->version     = '1.2.2';
		$this->requires    = array(
			'MantisCore' => '>= 1.2.0, < 3.0',
		);
		$this->author  = 'Frank Bültge';
		$this->contact = 'frank@bueltge.de';
		$this->url     = 'https://github.com/bueltge/Chosen-for-MantisBT';
	}
	
	
	function hooks() {
		
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	/**
	 * Create the resource link to load the chosen library.
	 */
	function resources( $p_event ) {
		
		$markup = '';
		$plugin_path = config_get_global( 'path' ) . 'plugins/' . plugin_get_current();
		
		$style        = $plugin_path . '/lib/chosen.min.css';
		
		$script        = $plugin_path . '/js/chosen_for_mantisbt.js';
		$chosen_script = $plugin_path . '/lib/chosen.jquery.min.js';
		
		$markup .= '<link rel="stylesheet" type="text/css" href="' . $style . '" />';
		$markup .= '<script type="text/javascript" src="' . $chosen_script . '"></script>';
		$markup .= '<script type="text/javascript" src="' . $script . '"></script>';
		
		return $markup;
	}
} // end class
