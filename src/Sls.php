<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListShardsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewaySls\Client as DarabonbaGatewaySlsClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sls extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client       = new DarabonbaGatewaySlsClient();
        $this->_spi          = $this->_client;
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'sls.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou'    => 'sls.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'    => 'sls.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'   => 'sls.cn-huhehaote.aliyuncs.com',
            'cn-shanghai'    => 'sls.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'sls.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou' => 'sls.cn-zhangjiakou.aliyuncs.com',
            'eu-central-1'   => 'sls.eu-central-1.aliyuncs.com',
        ];
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $body               = [];
        if (!Utils::isUnset($request->consumerGroup)) {
            $body['consumerGroup'] = $request->consumerGroup;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param CreateLogStoreRequest $request
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param CreateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['projectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     * @param string $consumerGroup
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($project, $logstore, $consumerGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string         $consumerGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $query              = [];
        if (!Utils::isUnset($request->backLines)) {
            $query['back_lines'] = $request->backLines;
        }
        if (!Utils::isUnset($request->forwardLines)) {
            $query['forward_lines'] = $request->forwardLines;
        }
        if (!Utils::isUnset($request->packId)) {
            $query['pack_id'] = $request->packId;
        }
        if (!Utils::isUnset($request->packMeta)) {
            $query['pack_meta'] = $request->packMeta;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContextLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetContextLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     *
     * @return GetCursorResponse
     */
    public function getCursor($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetCursorResponse
     */
    public function getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardId            = OpenApiUtilClient::getEncodeParam($shardId);
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursor',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTime($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardId            = OpenApiUtilClient::getEncodeParam($shardId);
        $query              = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursorTime',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     *
     * @return GetHistogramsResponse
     */
    public function getHistograms($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetHistogramsResponse
     */
    public function getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistograms',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetHistogramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return GetIndexResponse
     */
    public function getIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexResponse
     */
    public function getIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreResponse
     */
    public function getLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogStoreResponse
     */
    public function getLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     *
     * @return GetLogsResponse
     */
    public function getLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogsResponse
     */
    public function getLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->line)) {
            $query['line'] = $request->line;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return GetProjectResponse
     */
    public function getProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param GetProjectLogsRequest $request
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectLogsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param GetProjectLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetProjectLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $savedsearchName
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $savedsearchName    = OpenApiUtilClient::getEncodeParam($savedsearchName);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroup($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroupWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param ListLogStoresRequest $request
     *
     * @return ListLogStoresResponse
     */
    public function listLogStores($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogStoresWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param ListLogStoresRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListLogStoresResponse
     */
    public function listLogStoresWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstoreName)) {
            $query['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $query['telemetryType'] = $request->telemetryType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogStores',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogStoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProjectRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return ListShardsResponse
     */
    public function listShards($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardsWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListShardsResponse
     */
    public function listShardsWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListShards',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListShardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param string             $shardID
     * @param MergeShardsRequest $request
     *
     * @return MergeShardsResponse
     */
    public function mergeShards($project, $logstore, $shardID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeShardsWithOptions($project, $logstore, $shardID, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param string             $shardID
     * @param MergeShardsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return MergeShardsResponse
     */
    public function mergeShardsWithOptions($project, $logstore, $shardID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardID            = OpenApiUtilClient::getEncodeParam($shardID);
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MergeShards',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardID . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return MergeShardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $project
     * @param string            $logstore
     * @param string            $shardID
     * @param SplitShardRequest $request
     *
     * @return SplitShardResponse
     */
    public function splitShard($project, $logstore, $shardID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitShardWithOptions($project, $logstore, $shardID, $request, $headers, $runtime);
    }

    /**
     * @param string            $project
     * @param string            $logstore
     * @param string            $shardID
     * @param SplitShardRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SplitShardResponse
     */
    public function splitShardWithOptions($project, $logstore, $shardID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardID            = OpenApiUtilClient::getEncodeParam($shardID);
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $query['shardCount'] = $request->shardCount;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SplitShard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardID . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return SplitShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
        $body               = [];
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     *
     * @return UpdateIndexResponse
     */
    public function updateIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIndexResponse
     */
    public function updateIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStore($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearch($project, $savedsearchName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $savedsearchName    = OpenApiUtilClient::getEncodeParam($savedsearchName);
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }
}
