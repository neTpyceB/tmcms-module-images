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
 * @method setImage(string $image)
 * @method setItemType(string $type)
 * @method setItemId(int $id)
 * @method setOrder(int $order)
 */
class Image extends Entity
{
    public function deleteObject()
    {
        // Remove file itself
        if (file_exists(DIR_BASE . $this->getImage())) unlink(DIR_BASE . $this->getImage());

        parent::deleteObject();
    }
}