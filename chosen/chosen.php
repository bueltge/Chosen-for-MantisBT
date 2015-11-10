<?php
# Copyright (C) 2015 Frank Bültge
# 
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
# 
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

class ChosenPlugin extends MantisPlugin {

	/**
	 * A method that populates the plugin information and minimum requirements.
	 * 
	 * @return  void
	 */
	public function register() {
		
		$this->name        = plugin_lang_get( 'title' );
		$this->description = plugin_lang_get( 'description' );
		$this->version     = '1.0.1';
		$this->requires    = array(
			'MantisCore' => '1.2.0, 1.3.0',
			// Plugin not needed with 1.3 (jQuery is bundled)
			//'jQuery'     => '1.11.1',
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
