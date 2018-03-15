<?php

namespace TMCms\Modules\Images;

use TMCms\Orm\Entity;
use TMCms\Modules\Images\Entity\ImageEntityRepository;
use TMCms\Modules\IModule;
use TMCms\Traits\singletonInstanceTrait;

\defined('INC') or exit;

/**
 * Class ModuleImages
 * @package TMCms\Modules\Images
 */
class ModuleImages implements IModule {
    use singletonInstanceTrait;

    public static $tables = [
        'images' => 'm_images'
    ];

    /**
     * @param string $item_type
     * @param int $item_id
     * @return string
     */
    public static function getPathForItemImages($item_type, $item_id)
    {
        return DIR_PUBLIC_URL . 'images' . DIRECTORY_SEPARATOR . $item_type . DIRECTORY_SEPARATOR . $item_id . DIRECTORY_SEPARATOR;
    }

    public static function getObjectImages(Entity $object)
    {
        // Get existing images in DB
        $image_collection = new ImageEntityRepository;
        $image_collection->setWhereItemType($object);
        $image_collection->setWhereItemId($object->getId());
        $image_collection->addOrderByField('order');
        return $image_collection->getAsArrayOfObjects();
    }

    public static function deleteEntityImages(Entity $object)
    {
        // Get existing images in DB
        $image_collection = new ImageEntityRepository;
        $image_collection->setWhereItemType($object);
        $image_collection->setWhereItemId($object->getId());

        return $image_collection->deleteObjectCollection();
    }
}
