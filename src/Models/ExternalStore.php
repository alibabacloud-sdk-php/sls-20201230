<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ExternalStore\parameter;
use AlibabaCloud\Tea\Model;

class ExternalStore extends Model
{
    /**
     * @description 名称
     *
     * @var string
     */
    public $externalStoreName;

    /**
     * @description 参数
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description 类型
     *
     * @var string
     */
    public $storeType;
    protected $_name = [
        'externalStoreName' => 'externalStoreName',
        'parameter'         => 'parameter',
        'storeType'         => 'storeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalStoreName) {
            $res['externalStoreName'] = $this->externalStoreName;
        }
        if (null !== $this->parameter) {
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExternalStore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externalStoreName'])) {
            $model->externalStoreName = $map['externalStoreName'];
        }
        if (isset($map['parameter'])) {
            $model->parameter = parameter::fromMap($map['parameter']);
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
