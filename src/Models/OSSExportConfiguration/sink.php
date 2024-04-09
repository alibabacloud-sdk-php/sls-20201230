<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\OSSExportConfiguration;

use AlibabaCloud\Tea\Model;

class sink extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @example 300
     *
     * @var int
     */
    public $bufferInterval;

    /**
     * @example 256
     *
     * @var int
     */
    public $bufferSize;

    /**
     * @example snappy/gizp/zstd/none
     *
     * @var string
     */
    public $compressionType;

    /**
     * @var mixed[]
     */
    public $contentDetail;

    /**
     * @example json/parquet/csv/orc
     *
     * @var string
     */
    public $contentType;

    /**
     * @example 123
     *
     * @var int
     */
    public $delaySec;

    /**
     * @example http://xxxxxxxx
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example %Y_%m_%d/good/bad
     *
     * @var string
     */
    public $pathFormat;

    /**
     * @example only support time
     *
     * @var string
     */
    public $pathFormatType;

    /**
     * @example prefixxxx/
     *
     * @var string
     */
    public $prefix;

    /**
     * @example acs:ram::xxxxxxx
     *
     * @var string
     */
    public $roleArn;

    /**
     * @example .json
     *
     * @var string
     */
    public $suffix;

    /**
     * @example +0800
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'bucket'          => 'bucket',
        'bufferInterval'  => 'bufferInterval',
        'bufferSize'      => 'bufferSize',
        'compressionType' => 'compressionType',
        'contentDetail'   => 'contentDetail',
        'contentType'     => 'contentType',
        'delaySec'        => 'delaySec',
        'endpoint'        => 'endpoint',
        'pathFormat'      => 'pathFormat',
        'pathFormatType'  => 'pathFormatType',
        'prefix'          => 'prefix',
        'roleArn'         => 'roleArn',
        'suffix'          => 'suffix',
        'timeZone'        => 'timeZone',
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
        if (null !== $this->bufferInterval) {
            $res['bufferInterval'] = $this->bufferInterval;
        }
        if (null !== $this->bufferSize) {
            $res['bufferSize'] = $this->bufferSize;
        }
        if (null !== $this->compressionType) {
            $res['compressionType'] = $this->compressionType;
        }
        if (null !== $this->contentDetail) {
            $res['contentDetail'] = $this->contentDetail;
        }
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->delaySec) {
            $res['delaySec'] = $this->delaySec;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->pathFormat) {
            $res['pathFormat'] = $this->pathFormat;
        }
        if (null !== $this->pathFormatType) {
            $res['pathFormatType'] = $this->pathFormatType;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['bufferInterval'])) {
            $model->bufferInterval = $map['bufferInterval'];
        }
        if (isset($map['bufferSize'])) {
            $model->bufferSize = $map['bufferSize'];
        }
        if (isset($map['compressionType'])) {
            $model->compressionType = $map['compressionType'];
        }
        if (isset($map['contentDetail'])) {
            $model->contentDetail = $map['contentDetail'];
        }
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }
        if (isset($map['delaySec'])) {
            $model->delaySec = $map['delaySec'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['pathFormat'])) {
            $model->pathFormat = $map['pathFormat'];
        }
        if (isset($map['pathFormatType'])) {
            $model->pathFormatType = $map['pathFormatType'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
