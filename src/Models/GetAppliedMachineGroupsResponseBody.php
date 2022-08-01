<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetAppliedMachineGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $machinegroups;
    protected $_name = [
        'count'         => 'count',
        'machinegroups' => 'machinegroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->machinegroups) {
            $res['machinegroups'] = $this->machinegroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppliedMachineGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['machinegroups'])) {
            if (!empty($map['machinegroups'])) {
                $model->machinegroups = $map['machinegroups'];
            }
        }

        return $model;
    }
}
