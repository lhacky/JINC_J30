<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class radar_spoke_labels
{
	// $labels : array
	function radar_spoke_labels( $labels )
	{
		$this->labels = $labels;
	}
	
	function set_colour( $colour )
	{
		$this->colour = $colour;
	}
}