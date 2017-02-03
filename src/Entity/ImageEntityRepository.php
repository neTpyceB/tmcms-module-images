<?php

namespace TMCms\Modules\Images\Entity;

use TMCms\Orm\EntityRepository;

/**
 * Class ImageRepository
 * @package TMCms\Modules\Images\Entity
 *
 * @method ImageEntityRepository setWhereImage(string $image_path)
 * @method ImageEntityRepository setWhereItemType(string $type)
 * @method ImageEntityRepository setWhereItemId(int $id)
 */
class ImageEntityRepository extends EntityRepository
{
    protected $table_structure = [
        'fields' => [
            'item_id' => [
                'type' => 'index',
            ],
            'item_type' => [
                'type' => 'varchar',
            ],
            'image' => [
                'type' => 'varchar',
            ],
            'order' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ],
        'indexes' => [
            'item_type' => [
                'type' => 'key',
            ],
        ],
    ];
}