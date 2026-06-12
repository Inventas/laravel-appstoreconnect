<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEventUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEvents\AppEventsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEvents extends BaseResource
{
    public function appEventsCreateInstance(
        AppEventCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appEventsGetInstance(
        string $id,
        ?array $fieldsappEvents = null,
        ?array $fieldsappEventLocalizations = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new AppEventsGetInstance($id, $fieldsappEvents, $fieldsappEventLocalizations, $include, $limitlocalizations));
    }

    public function appEventsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppEventsDeleteInstance($id));
    }

    public function appEventsUpdateInstance(
        string $id,
        AppEventUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventsUpdateInstance($id, $payload));
    }

    public function appEventsLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppEventsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventScreenshots
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $include
     */
    public function appEventsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsappEventLocalizations = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsappEventScreenshots = null,
        ?array $fieldsappEventVideoClips = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappEventScreenshots = null,
        ?int $limitappEventVideoClips = null,
    ): Response {
        return $this->connector->send(new AppEventsLocalizationsGetToManyRelated($id, $fieldsappEventLocalizations, $fieldsappEvents, $fieldsappEventScreenshots, $fieldsappEventVideoClips, $limit, $include, $limitappEventScreenshots, $limitappEventVideoClips));
    }
}
