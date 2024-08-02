<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsResponseBody\results\configuration;

use AlibabaCloud\Tea\Model;

class sink extends Model
{
    /**
     * @description 对象存储桶
     *
     * @example ali-test-oss-bucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description 压缩格式
     *
     * @example none
     *
     * @var string
     */
    public $compressionType;

    /**
     * @description 下载文件格式
     *
     * @example csv
     *
     * @var string
     */
    public $contentType;

    /**
     * @example download/
     *
     * @var string
     */
    public $prefix;

    /**
     * @description 下载使用roleArn
     *
     * @example acs:ram::123456:role/aliyunlogimportossrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @example AliyunOSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket'          => 'bucket',
        'compressionType' => 'compressionType',
        'contentType'     => 'contentType',
        'prefix'          => 'prefix',
        'roleArn'         => 'roleArn',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->compressionType) {
            $res['compressionType'] = $this->compressionType;
        }
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['compressionType'])) {
            $model->compressionType = $map['compressionType'];
        }
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
