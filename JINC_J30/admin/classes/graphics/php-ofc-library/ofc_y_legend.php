<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class y_legend
{
	function y_legend( $text='' )
	{
		$this->text = $text;
	}
	
	function set_style( $css )
	{
		$this->style = $css;
		//"{font-size: 20px; color:#0000ff; font-family: Verdana; text-align: center;}";		
	}
}