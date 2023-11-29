<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest;

use AlibabaCloud\Tea\Model;

class groupAttribute extends Model
{
    /**
     * @description The identifier of the external management system on which the machine group depends. This parameter is empty by default.
     *
     * @example testgroup2
     *
     * @var string
     */
    public $externalName;

    /**
     * @description The topic of the machine group. This parameter is empty by default.
     *
     * @example testtopic2
     *
     * @var string
     */
    public $groupTopic;
    protected $_name = [
        'externalName' => 'externalName',
        'groupTopic'   => 'groupTopic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalName) {
            $res['externalName'] = $this->externalName;
        }
        if (null !== $this->groupTopic) {
            $res['groupTopic'] = $this->groupTopic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['externalName'])) {
            $model->externalName = $map['externalName'];
        }
        if (isset($map['groupTopic'])) {
            $model->groupTopic = $map['groupTopic'];
        }

        return $model;
    }
}
