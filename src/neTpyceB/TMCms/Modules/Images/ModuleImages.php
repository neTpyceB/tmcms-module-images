<?php
namespace neTpyceB\TMCms\Modules\Images;

use neTpyceB\TMCms\Modules\IModule;

defined('INC') or exit;

class ModuleImages implements IModule {
	public static $tables = [
		'images' => 'm_images'
	];

	/** @var $this */
	private static $instance;

	public static function getInstance() {
		if (!self::$instance) self::$instance = new self;
		return self::$instance;
	}

	/**
	 * @param string $item_type
	 * @param int $item_id
	 * @return string
	 */
	public static function getPathForItemImages($item_type, $item_id)
	{
		return DIR_PUBLIC_URL . 'images' . DIRECTORY_SEPARATOR . $item_type . DIRECTORY_SEPARATOR . $item_id . DIRECTORY_SEPARATOR;
	}
}