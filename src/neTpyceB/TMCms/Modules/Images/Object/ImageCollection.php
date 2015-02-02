<?php
namespace neTpyceB\TMCms\Modules\Images\Object;

use neTpyceB\TMCms\Modules\CommonObjectCollection;

class ImageCollection extends CommonObjectCollection {
    protected $db_table = 'm_images';

    /**
     * @param int $item_id
     * @return $this
     */
    public function setWhereItemId($item_id)
    {
        $this->setFilterValue('item_id', $item_id);

        return $this;

    }

    /**
     * @param string $item_type
     * @return $this
     */
    public function setWhereItemType($item_type) {
        $this->setFilterValue('item_type', $item_type);

        return $this;
    }
}