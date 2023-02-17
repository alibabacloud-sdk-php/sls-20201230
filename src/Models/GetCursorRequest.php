<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCursorRequest extends Model
{
    /**
     * @example begin
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'from' => 'from',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCursorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        return $model;
    }
}
