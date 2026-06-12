<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaNotificationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaNotifications\BuildBetaNotificationsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BuildBetaNotifications extends BaseResource
{
    public function buildBetaNotificationsCreateInstance(
        BuildBetaNotificationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildBetaNotificationsCreateInstance($payload));
    }
}
