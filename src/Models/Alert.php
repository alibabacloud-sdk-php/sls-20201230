<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Alert extends Model
{
    /**
     * @var AlertConfiguration
     */
    public $configuration;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @example Alert Desc
     *
     * @var string
     */
    public $description;

    /**
     * @example alertNameExample
     *
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @example alert-123456
     *
     * @var string
     */
    public $name;

    /**
     * @var Schedule
     */
    public $schedule;

    /**
     * @example Enabled/Disabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configuration'    => 'configuration',
        'createTime'       => 'createTime',
        'description'      => 'description',
        'displayName'      => 'displayName',
        'lastModifiedTime' => 'lastModifiedTime',
        'name'             => 'name',
        'schedule'         => 'schedule',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Alert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = AlertConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['schedule'])) {
            $model->schedule = Schedule::fromMap($map['schedule']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
