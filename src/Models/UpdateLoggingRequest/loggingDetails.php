<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingRequest;

use AlibabaCloud\Tea\Model;

class loggingDetails extends Model
{
    /**
     * @example my-logstore
     *
     * @var string
     */
    public $logstore;

    /**
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
