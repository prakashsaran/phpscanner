<?php
/**
 * BaseConfig
 */
class BaseConfig
{
	protected $BaseConfig;
	protected $ImageType = 'png';
	protected $imageWidth = 400;
	protected $imageHeight = 400;
	function __construct($config = [])
	{
		$this->BaseConfig = $config;
	}
}