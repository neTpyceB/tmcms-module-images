<?php

namespace TMCms\Modules\Images\Entity;

use TMCms\Orm\EntityRepository;

/**
 * Class ImageRepository
 * @package TMCms\Modules\Images\Entity
 *
 * @method $this setWhereActive(int $flag)
 * @method $this setWhereImage(string $image_path)
 * @method $this setWhereItemType(string $type)
 * @method $this setWhereItemId(int $id)
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
            'active' => [
                'type' => 'bool',
            ],
        ],
        'indexes' => [
            'item_type' => [
                'type' => 'key',
            ],
        ],
    ];
}