<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $taskCode;

    /**
     * @var int
     */
    public $taskCreateTime;

    /**
     * @var int
     */
    public $taskDataLines;

    /**
     * @var int
     */
    public $taskFinishTime;

    /**
     * @var int
     */
    public $taskLastDataReceiveTime;

    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'id'                      => 'id',
        'taskCode'                => 'taskCode',
        'taskCreateTime'          => 'taskCreateTime',
        'taskDataLines'           => 'taskDataLines',
        'taskFinishTime'          => 'taskFinishTime',
        'taskLastDataReceiveTime' => 'taskLastDataReceiveTime',
        'taskMessage'             => 'taskMessage',
        'taskStatus'              => 'taskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->taskCode) {
            $res['taskCode'] = $this->taskCode;
        }
        if (null !== $this->taskCreateTime) {
            $res['taskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->taskDataLines) {
            $res['taskDataLines'] = $this->taskDataLines;
        }
        if (null !== $this->taskFinishTime) {
            $res['taskFinishTime'] = $this->taskFinishTime;
        }
        if (null !== $this->taskLastDataReceiveTime) {
            $res['taskLastDataReceiveTime'] = $this->taskLastDataReceiveTime;
        }
        if (null !== $this->taskMessage) {
            $res['taskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['taskCode'])) {
            $model->taskCode = $map['taskCode'];
        }
        if (isset($map['taskCreateTime'])) {
            $model->taskCreateTime = $map['taskCreateTime'];
        }
        if (isset($map['taskDataLines'])) {
            $model->taskDataLines = $map['taskDataLines'];
        }
        if (isset($map['taskFinishTime'])) {
            $model->taskFinishTime = $map['taskFinishTime'];
        }
        if (isset($map['taskLastDataReceiveTime'])) {
            $model->taskLastDataReceiveTime = $map['taskLastDataReceiveTime'];
        }
        if (isset($map['taskMessage'])) {
            $model->taskMessage = $map['taskMessage'];
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
