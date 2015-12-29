<?php
namespace TMCms\Modules\Images\Object;

use TMCms\Orm\EntityRepository;

/**
 * Class ImageCollection
 * @package TMCms\Modules\Images\Object
 *
 * @method setWhereItemType(string $type)
 * @method setWhereItemId(int $id)
 */
class ImageCollection extends EntityRepository {
    protected $db_table = 'm_images';
}