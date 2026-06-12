<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppInfoLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppInfoLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations\AppInfoLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations\AppInfoLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations\AppInfoLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations\AppInfoLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppInfoLocalizations extends BaseResource
{
    public function appInfoLocalizationsCreateInstance(
        AppInfoLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppInfoLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $include
     */
    public function appInfoLocalizationsGetInstance(
        string $id,
        ?array $fieldsappInfoLocalizations = null,
        ?array $fieldsappInfos = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppInfoLocalizationsGetInstance($id, $fieldsappInfoLocalizations, $fieldsappInfos, $include));
    }

    public function appInfoLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppInfoLocalizationsDeleteInstance($id));
    }

    public function appInfoLocalizationsUpdateInstance(
        string $id,
        AppInfoLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppInfoLocalizationsUpdateInstance($id, $payload));
    }
}
