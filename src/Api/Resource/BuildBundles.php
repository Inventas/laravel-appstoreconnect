<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesAppClipDomainCacheStatusGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesAppClipDomainCacheStatusGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesAppClipDomainDebugStatusGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesAppClipDomainDebugStatusGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesBetaAppClipInvocationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesBetaAppClipInvocationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesBuildBundleFileSizesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBundles\BuildBundlesBuildBundleFileSizesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BuildBundles extends BaseResource
{
    public function buildBundlesAppClipDomainCacheStatusGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildBundlesAppClipDomainCacheStatusGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDomainStatuses
     */
    public function buildBundlesAppClipDomainCacheStatusGetToOneRelated(
        string $id,
        ?array $fieldsappClipDomainStatuses = null,
    ): Response {
        return $this->connector->send(new BuildBundlesAppClipDomainCacheStatusGetToOneRelated($id, $fieldsappClipDomainStatuses));
    }

    public function buildBundlesAppClipDomainDebugStatusGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildBundlesAppClipDomainDebugStatusGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDomainStatuses
     */
    public function buildBundlesAppClipDomainDebugStatusGetToOneRelated(
        string $id,
        ?array $fieldsappClipDomainStatuses = null,
    ): Response {
        return $this->connector->send(new BuildBundlesAppClipDomainDebugStatusGetToOneRelated($id, $fieldsappClipDomainStatuses));
    }

    public function buildBundlesBetaAppClipInvocationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildBundlesBetaAppClipInvocationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocations
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocationLocalizations
     * @param  array<int, string>|null  $include
     */
    public function buildBundlesBetaAppClipInvocationsGetToManyRelated(
        string $id,
        ?array $fieldsbetaAppClipInvocations = null,
        ?array $fieldsbetaAppClipInvocationLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbetaAppClipInvocationLocalizations = null,
    ): Response {
        return $this->connector->send(new BuildBundlesBetaAppClipInvocationsGetToManyRelated($id, $fieldsbetaAppClipInvocations, $fieldsbetaAppClipInvocationLocalizations, $limit, $include, $limitbetaAppClipInvocationLocalizations));
    }

    public function buildBundlesBuildBundleFileSizesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildBundlesBuildBundleFileSizesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildBundleFileSizes
     */
    public function buildBundlesBuildBundleFileSizesGetToManyRelated(
        string $id,
        ?array $fieldsbuildBundleFileSizes = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildBundlesBuildBundleFileSizesGetToManyRelated($id, $fieldsbuildBundleFileSizes, $limit));
    }
}
