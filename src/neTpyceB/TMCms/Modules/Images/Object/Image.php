<?php
namespace neTpyceB\TMCms\Modules\Images\Object;

use neTpyceB\TMCms\Modules\CommonObject;

/**
 * Class Image
 * @package neTpyceB\TMCms\Modules\Images\Object
 * @method getImage() string
 * @method setImage(string) string
 * @method setOrder(int) string
 */
class Image extends CommonObject {
    protected $db_table = 'm_images';

    protected $item_type = '';
    protected $item_id = 0;
    protected $order = 0;

    /**
     * @param string $item_type
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->setField('item_type', $item_type);

        return $this;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setItemId($id)
    {
        $this->setField('item_id', $id);

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->getField('item_id');
    }

    public function deleteObject() {
        if (file_exists(DIR_BASE . $this->getImage())) unlink(DIR_BASE . $this->getImage());

        parent::deleteObject();
    }
}