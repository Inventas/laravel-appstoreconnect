<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppInfoUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosAgeRatingDeclarationGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosAgeRatingDeclarationGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosAppInfoLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosAppInfoLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimaryCategoryGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimaryCategoryGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimarySubcategoryOneGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimarySubcategoryOneGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimarySubcategoryTwoGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosPrimarySubcategoryTwoGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondaryCategoryGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondaryCategoryGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondarySubcategoryOneGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondarySubcategoryOneGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondarySubcategoryTwoGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosSecondarySubcategoryTwoGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosTerritoryAgeRatingsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosTerritoryAgeRatingsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfos\AppInfosUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppInfos extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsageRatingDeclarations
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosGetInstance(
        string $id,
        ?array $fieldsappInfos = null,
        ?array $fieldsapps = null,
        ?array $fieldsageRatingDeclarations = null,
        ?array $fieldsappInfoLocalizations = null,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitappInfoLocalizations = null,
    ): Response {
        return $this->connector->send(new AppInfosGetInstance($id, $fieldsappInfos, $fieldsapps, $fieldsageRatingDeclarations, $fieldsappInfoLocalizations, $fieldsappCategories, $include, $limitappInfoLocalizations));
    }

    public function appInfosUpdateInstance(
        string $id,
        AppInfoUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppInfosUpdateInstance($id, $payload));
    }

    public function appInfosAgeRatingDeclarationGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosAgeRatingDeclarationGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsageRatingDeclarations
     */
    public function appInfosAgeRatingDeclarationGetToOneRelated(
        string $id,
        ?array $fieldsageRatingDeclarations = null,
    ): Response {
        return $this->connector->send(new AppInfosAgeRatingDeclarationGetToOneRelated($id, $fieldsageRatingDeclarations));
    }

    public function appInfosAppInfoLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppInfosAppInfoLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $include
     */
    public function appInfosAppInfoLocalizationsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $fieldsappInfoLocalizations = null,
        ?array $fieldsappInfos = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppInfosAppInfoLocalizationsGetToManyRelated($id, $filterlocale, $fieldsappInfoLocalizations, $fieldsappInfos, $limit, $include));
    }

    public function appInfosPrimaryCategoryGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosPrimaryCategoryGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosPrimaryCategoryGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosPrimaryCategoryGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosPrimarySubcategoryOneGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosPrimarySubcategoryOneGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosPrimarySubcategoryOneGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosPrimarySubcategoryOneGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosPrimarySubcategoryTwoGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosPrimarySubcategoryTwoGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosPrimarySubcategoryTwoGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosPrimarySubcategoryTwoGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosSecondaryCategoryGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosSecondaryCategoryGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosSecondaryCategoryGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosSecondaryCategoryGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosSecondarySubcategoryOneGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosSecondarySubcategoryOneGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosSecondarySubcategoryOneGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosSecondarySubcategoryOneGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosSecondarySubcategoryTwoGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppInfosSecondarySubcategoryTwoGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appInfosSecondarySubcategoryTwoGetToOneRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppInfosSecondarySubcategoryTwoGetToOneRelated($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appInfosTerritoryAgeRatingsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppInfosTerritoryAgeRatingsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritoryAgeRatings
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appInfosTerritoryAgeRatingsGetToManyRelated(
        string $id,
        ?array $fieldsterritoryAgeRatings = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppInfosTerritoryAgeRatingsGetToManyRelated($id, $fieldsterritoryAgeRatings, $fieldsterritories, $limit, $include));
    }
}
