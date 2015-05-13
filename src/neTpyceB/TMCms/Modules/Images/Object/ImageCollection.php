<?php
namespace neTpyceB\TMCms\Modules\Images\Object;

use neTpyceB\TMCms\Modules\CommonObjectCollection;

/**
 * Class ImageCollection
 * @package neTpyceB\TMCms\Modules\Images\Object
 *
 * @method setWhereItemType(string)
 * @method setWhereItemId(int)
 */
class ImageCollection extends CommonObjectCollection {
    protected $db_table = 'm_images';
}