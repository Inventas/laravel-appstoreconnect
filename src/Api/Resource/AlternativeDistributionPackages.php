<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AlternativeDistributionPackageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages\AlternativeDistributionPackagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages\AlternativeDistributionPackagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages\AlternativeDistributionPackagesVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages\AlternativeDistributionPackagesVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionPackages extends BaseResource
{
    public function alternativeDistributionPackagesCreateInstance(
        AlternativeDistributionPackageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $include
     */
    public function alternativeDistributionPackagesGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionPackages = null,
        ?array $fieldsalternativeDistributionPackageVersions = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackagesGetInstance($id, $fieldsalternativeDistributionPackages, $fieldsalternativeDistributionPackageVersions, $include, $limitversions));
    }

    public function alternativeDistributionPackagesVersionsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackagesVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function alternativeDistributionPackagesVersionsGetToManyRelated(
        string $id,
        ?array $filterstate = null,
        ?array $fieldsalternativeDistributionPackageVersions = null,
        ?array $fieldsalternativeDistributionPackageVariants = null,
        ?array $fieldsalternativeDistributionPackageDeltas = null,
        ?array $fieldsalternativeDistributionPackages = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitvariants = null,
        ?int $limitdeltas = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackagesVersionsGetToManyRelated($id, $filterstate, $fieldsalternativeDistributionPackageVersions, $fieldsalternativeDistributionPackageVariants, $fieldsalternativeDistributionPackageDeltas, $fieldsalternativeDistributionPackages, $limit, $include, $limitvariants, $limitdeltas));
    }
}
