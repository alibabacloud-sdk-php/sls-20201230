<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledSQLRequest extends Model
{
    /**
     * @var ScheduledSQLConfiguration
     */
    public $configuration;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ali-test-scheduled-sql
     *
     * @var string
     */
    public $displayName;

    /**
     * @example sql-123456789-123456
     *
     * @var string
     */
    public $name;

    /**
     * @var Schedule
     */
    public $schedule;
    protected $_name = [
        'configuration' => 'configuration',
        'description'   => 'description',
        'displayName'   => 'displayName',
        'name'          => 'name',
        'schedule'      => 'schedule',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledSQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = ScheduledSQLConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['schedule'])) {
            $model->schedule = Schedule::fromMap($map['schedule']);
        }

        return $model;
    }
}
