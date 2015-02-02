<?php
namespace neTpyceB\TMCms\Modules\Images;

use neTpyceB\TMCms\Modules\IModule;

defined('INC') or exit;

class ModuleImages implements IModule {
	/** @var $this */
	private static $instance;

	public static function getInstance() {
		if (!self::$instance) self::$instance = new self;
		return self::$instance;
	}



}