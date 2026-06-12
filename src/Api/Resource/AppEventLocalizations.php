<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEventLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsAppEventScreenshotsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsAppEventScreenshotsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsAppEventVideoClipsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsAppEventVideoClipsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations\AppEventLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEventLocalizations extends BaseResource
{
    public function appEventLocalizationsCreateInstance(
        AppEventLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventScreenshots
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $include
     */
    public function appEventLocalizationsGetInstance(
        string $id,
        ?array $fieldsappEventLocalizations = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsappEventScreenshots = null,
        ?array $fieldsappEventVideoClips = null,
        ?array $include = null,
        ?int $limitappEventScreenshots = null,
        ?int $limitappEventVideoClips = null,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsGetInstance($id, $fieldsappEventLocalizations, $fieldsappEvents, $fieldsappEventScreenshots, $fieldsappEventVideoClips, $include, $limitappEventScreenshots, $limitappEventVideoClips));
    }

    public function appEventLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppEventLocalizationsDeleteInstance($id));
    }

    public function appEventLocalizationsUpdateInstance(
        string $id,
        AppEventLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsUpdateInstance($id, $payload));
    }

    public function appEventLocalizationsAppEventScreenshotsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsAppEventScreenshotsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventScreenshots
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appEventLocalizationsAppEventScreenshotsGetToManyRelated(
        string $id,
        ?array $fieldsappEventScreenshots = null,
        ?array $fieldsappEventLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsAppEventScreenshotsGetToManyRelated($id, $fieldsappEventScreenshots, $fieldsappEventLocalizations, $limit, $include));
    }

    public function appEventLocalizationsAppEventVideoClipsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsAppEventVideoClipsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appEventLocalizationsAppEventVideoClipsGetToManyRelated(
        string $id,
        ?array $fieldsappEventVideoClips = null,
        ?array $fieldsappEventLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppEventLocalizationsAppEventVideoClipsGetToManyRelated($id, $fieldsappEventVideoClips, $fieldsappEventLocalizations, $limit, $include));
    }
}
