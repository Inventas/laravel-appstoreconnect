<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\UserInvitationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsVisibleAppsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\UserInvitations\UserInvitationsVisibleAppsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class UserInvitations extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filteremail
     * @param  array<int, string>|null  $filterroles
     * @param  array<int, string>|null  $filtervisibleApps
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsuserInvitations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function userInvitationsGetCollection(
        ?array $filteremail = null,
        ?array $filterroles = null,
        ?array $filtervisibleApps = null,
        ?array $sort = null,
        ?array $fieldsuserInvitations = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitvisibleApps = null,
    ): Response {
        return $this->connector->send(new UserInvitationsGetCollection($filteremail, $filterroles, $filtervisibleApps, $sort, $fieldsuserInvitations, $fieldsapps, $limit, $include, $limitvisibleApps));
    }

    public function userInvitationsCreateInstance(
        UserInvitationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new UserInvitationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsuserInvitations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function userInvitationsGetInstance(
        string $id,
        ?array $fieldsuserInvitations = null,
        ?array $fieldsapps = null,
        ?array $include = null,
        ?int $limitvisibleApps = null,
    ): Response {
        return $this->connector->send(new UserInvitationsGetInstance($id, $fieldsuserInvitations, $fieldsapps, $include, $limitvisibleApps));
    }

    public function userInvitationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new UserInvitationsDeleteInstance($id));
    }

    public function userInvitationsVisibleAppsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new UserInvitationsVisibleAppsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function userInvitationsVisibleAppsGetToManyRelated(
        string $id,
        ?array $fieldsapps = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new UserInvitationsVisibleAppsGetToManyRelated($id, $fieldsapps, $limit));
    }
}
