<?php
namespace TMCms\AdminTMCms\Modules\Images\Object;

use TMCms\AdminTMCms\Orm\Entity;

/**
 * Class Image
 * @package TMCms\AdminTMCms\Modules\Images\Object
 * @method string getImage()
 * @method string getItemType()
 * @method int getItemId()
 * @method int getOrder()
 *
 * @method setImage(string $image)
 * @method setItemType(string $type)
 * @method setItemId(int $id)
 * @method setOrder(int $order)
 */
class Image extends Entity {
    protected $db_table = 'm_images';

    public function deleteObject() {
        // Remove file itself
        if (file_exists(DIR_BASE . $this->getImage())) unlink(DIR_BASE . $this->getImage());

        parent::deleteObject();
    }
}