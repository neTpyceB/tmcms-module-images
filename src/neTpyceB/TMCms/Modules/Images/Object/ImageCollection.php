<?php
namespace neTpyceB\TMCms\Modules\Images\Object;

use neTpyceB\TMCms\Modules\EntityRepository;

/**
 * Class ImageCollection
 * @package neTpyceB\TMCms\Modules\Images\Object
 *
 * @method setWhereItemType(string $type)
 * @method setWhereItemId(int $id)
 */
class ImageCollection extends EntityRepository {
    protected $db_table = 'm_images';
}