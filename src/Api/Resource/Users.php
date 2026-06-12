<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\UserUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\UserVisibleAppsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersVisibleAppsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersVisibleAppsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersVisibleAppsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersVisibleAppsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Users\UsersVisibleAppsReplaceToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Users extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterusername
     * @param  array<int, string>|null  $filterroles
     * @param  array<int, string>|null  $filtervisibleApps
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsusers
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function usersGetCollection(
        ?array $filterusername = null,
        ?array $filterroles = null,
        ?array $filtervisibleApps = null,
        ?array $sort = null,
        ?array $fieldsusers = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitvisibleApps = null,
    ): Response {
        return $this->connector->send(new UsersGetCollection($filterusername, $filterroles, $filtervisibleApps, $sort, $fieldsusers, $fieldsapps, $limit, $include, $limitvisibleApps));
    }

    /**
     * @param  array<int, string>|null  $fieldsusers
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function usersGetInstance(
        string $id,
        ?array $fieldsusers = null,
        ?array $fieldsapps = null,
        ?array $include = null,
        ?int $limitvisibleApps = null,
    ): Response {
        return $this->connector->send(new UsersGetInstance($id, $fieldsusers, $fieldsapps, $include, $limitvisibleApps));
    }

    public function usersDeleteInstance(string $id): Response
    {
        return $this->connector->send(new UsersDeleteInstance($id));
    }

    public function usersUpdateInstance(
        string $id,
        UserUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new UsersUpdateInstance($id, $payload));
    }

    public function usersVisibleAppsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new UsersVisibleAppsGetToManyRelationship($id, $limit));
    }

    public function usersVisibleAppsCreateToManyRelationship(
        string $id,
        UserVisibleAppsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new UsersVisibleAppsCreateToManyRelationship($id, $payload));
    }

    public function usersVisibleAppsDeleteToManyRelationship(
        string $id,
        UserVisibleAppsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new UsersVisibleAppsDeleteToManyRelationship($id, $payload));
    }

    public function usersVisibleAppsReplaceToManyRelationship(
        string $id,
        UserVisibleAppsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new UsersVisibleAppsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function usersVisibleAppsGetToManyRelated(string $id, ?array $fieldsapps = null, ?int $limit = null): Response
    {
        return $this->connector->send(new UsersVisibleAppsGetToManyRelated($id, $fieldsapps, $limit));
    }
}
