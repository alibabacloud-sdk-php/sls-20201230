<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListAnnotationDataSetsRequest extends Model
{
    /**
     * @description The line from which the query starts.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page.
     *
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'offset' => 'offset',
        'size'   => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAnnotationDataSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
