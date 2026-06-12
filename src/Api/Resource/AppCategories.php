<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesParentGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesParentGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesSubcategoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCategories\AppCategoriesSubcategoriesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppCategories extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterplatforms
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appCategoriesGetCollection(
        ?array $filterplatforms = null,
        ?bool $existsparent = null,
        ?array $fieldsappCategories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppCategoriesGetCollection($filterplatforms, $existsparent, $fieldsappCategories, $limit, $include, $limitsubcategories));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appCategoriesGetInstance(
        string $id,
        ?array $fieldsappCategories = null,
        ?array $include = null,
        ?int $limitsubcategories = null,
    ): Response {
        return $this->connector->send(new AppCategoriesGetInstance($id, $fieldsappCategories, $include, $limitsubcategories));
    }

    public function appCategoriesParentGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppCategoriesParentGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     */
    public function appCategoriesParentGetToOneRelated(string $id, ?array $fieldsappCategories = null): Response
    {
        return $this->connector->send(new AppCategoriesParentGetToOneRelated($id, $fieldsappCategories));
    }

    public function appCategoriesSubcategoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppCategoriesSubcategoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     */
    public function appCategoriesSubcategoriesGetToManyRelated(
        string $id,
        ?array $fieldsappCategories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCategoriesSubcategoriesGetToManyRelated($id, $fieldsappCategories, $limit));
    }
}
