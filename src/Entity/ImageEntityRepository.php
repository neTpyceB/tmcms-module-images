<?php
declare(strict_types=1);

namespace TMCms\Modules\Images\Entity;

use TMCms\Orm\Entity;
use TMCms\Orm\EntityRepository;
use TMCms\Orm\TableStructure;

/**
 * Class ImageRepository
 * @package TMCms\Modules\Images\Entity
 *
 * @method $this setWhereActive(int|string $flag)
 * @method $this setWhereImage(string $image_path)
 * @method $this setWhereItemId(string $id)
 */
class ImageEntityRepository extends EntityRepository
{
    const FIELD_ITEM_TYPE = 'item_type';

    protected $table_structure = [
        'fields' => [
            'item_id' => [
                'type' => TableStructure::FIELD_TYPE_INDEX,
            ],
            self::FIELD_ITEM_TYPE => [
                'type' => TableStructure::FIELD_TYPE_VARCHAR_255,
            ],
            'image' => [
                'type' => TableStructure::FIELD_TYPE_VARCHAR_255,
            ],
            'order' => [
                'type' => TableStructure::FIELD_TYPE_UNSIGNED_INTEGER,
            ],
            'active' => [
                'type' => TableStructure::FIELD_TYPE_BOOL,
            ],
        ],
    ];

    /**
     * @param string|Entity|EntityRepository $type
     * @return $this
     */
    public function setWhereItemType($type) {
        // If Entity or EntityRepository - get string value from it
        if (is_a($type, Entity::class)) {
            /** @var Entity $type */
            $type = $type->getUnqualifiedShortClassName();
        }
        // If EntityRepository - get string value from it
        if (is_a($type, EntityRepository::class)) {
            /** @var Entity $type */
            $type = str_replace(self::CLASS_RELATION_NAME_REPOSITORY, '', $type->getUnqualifiedShortClassName());
        }

        $this->addSimpleWhereField(self::FIELD_ITEM_TYPE, $type);
        return $this;
    }
}
