<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Shard extends Model
{
    /**
     * @example 1453949705
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 8000000000000000000000000000000
     *
     * @var string
     */
    public $exclusiveEndKey;

    /**
     * @example 00000000000000000000000000000000
     *
     * @var string
     */
    public $inclusiveBeginKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $shardID;

    /**
     * @example readwrite
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'createTime',
        'exclusiveEndKey'   => 'exclusiveEndKey',
        'inclusiveBeginKey' => 'inclusiveBeginKey',
        'shardID'           => 'shardID',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->exclusiveEndKey) {
            $res['exclusiveEndKey'] = $this->exclusiveEndKey;
        }
        if (null !== $this->inclusiveBeginKey) {
            $res['inclusiveBeginKey'] = $this->inclusiveBeginKey;
        }
        if (null !== $this->shardID) {
            $res['shardID'] = $this->shardID;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Shard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['exclusiveEndKey'])) {
            $model->exclusiveEndKey = $map['exclusiveEndKey'];
        }
        if (isset($map['inclusiveBeginKey'])) {
            $model->inclusiveBeginKey = $map['inclusiveBeginKey'];
        }
        if (isset($map['shardID'])) {
            $model->shardID = $map['shardID'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
