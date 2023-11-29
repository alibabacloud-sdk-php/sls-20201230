<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest;

use AlibabaCloud\Tea\Model;

class loggingDetails extends Model
{
    /**
     * @description The name of the Logstore to which service logs of the type are stored.
     *
     * @example my-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The type of service logs. Valid values:
     *
     *   consumergroup_log: the consumption delay logs of consumer groups.
     *   logtail_alarm: the alert logs of Logtail.
     *   operation_log: the operation logs.
     *   logtail_profile: the collection logs of Logtail.
     *   metering: the metering logs.
     *   logtail_status: the status logs of Logtail.
     *   scheduledsqlalert: the run logs of Scheduled SQL jobs.
     *   etl_alert: the run logs of data transformation jobs.
     *
     * @example consumergroup_log
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'logstore' => 'logstore',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loggingDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
