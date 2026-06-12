<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions\AlternativeDistributionPackageVersionsDeltasGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions\AlternativeDistributionPackageVersionsDeltasGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions\AlternativeDistributionPackageVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions\AlternativeDistributionPackageVersionsVariantsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions\AlternativeDistributionPackageVersionsVariantsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionPackageVersions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function alternativeDistributionPackageVersionsGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionPackageVersions = null,
        ?array $fieldsalternativeDistributionPackageVariants = null,
        ?array $fieldsalternativeDistributionPackageDeltas = null,
        ?array $fieldsalternativeDistributionPackages = null,
        ?array $include = null,
        ?int $limitdeltas = null,
        ?int $limitvariants = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVersionsGetInstance($id, $fieldsalternativeDistributionPackageVersions, $fieldsalternativeDistributionPackageVariants, $fieldsalternativeDistributionPackageDeltas, $fieldsalternativeDistributionPackages, $include, $limitdeltas, $limitvariants));
    }

    public function alternativeDistributionPackageVersionsDeltasGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVersionsDeltasGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     */
    public function alternativeDistributionPackageVersionsDeltasGetToManyRelated(
        string $id,
        ?array $fieldsalternativeDistributionPackageDeltas = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVersionsDeltasGetToManyRelated($id, $fieldsalternativeDistributionPackageDeltas, $limit));
    }

    public function alternativeDistributionPackageVersionsVariantsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVersionsVariantsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     */
    public function alternativeDistributionPackageVersionsVariantsGetToManyRelated(
        string $id,
        ?array $fieldsalternativeDistributionPackageVariants = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVersionsVariantsGetToManyRelated($id, $fieldsalternativeDistributionPackageVariants, $limit));
    }
}
