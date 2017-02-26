<?php

namespace TMCms\Modules\Images\Entity;

use TMCms\Orm\Entity;

/**
 * Class Image
 * @package TMCms\Modules\Images\Entity
 * @method string getImage()
 * @method string getItemType()
 * @method int getItemId()
 * @method int getOrder()
 *
 * @method $this setImage(string $image)
 * @method $this setItemType(string $type)
 * @method $this setItemId(int $id)
 * @method $this setOrder(int $order)
 */
class ImageEntity extends Entity
{
    public function deleteObject()
    {
        // Remove file itself
        if ($this->getImage() && file_exists(DIR_BASE . $this->getImage()) && is_file(file_exists(DIR_BASE . $this->getImage()))) {
            unlink(DIR_BASE . $this->getImage());
        }

        parent::deleteObject();
    }
}