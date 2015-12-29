<?php
namespace TMCms\AdminTMCms\Modules\Images\Object;

use TMCms\AdminTMCms\Orm\EntityRepository;

/**
 * Class ImageCollection
 * @package TMCms\AdminTMCms\Modules\Images\Object
 *
 * @method setWhereItemType(string $type)
 * @method setWhereItemId(int $id)
 */
class ImageCollection extends EntityRepository {
    protected $db_table = 'm_images';
}