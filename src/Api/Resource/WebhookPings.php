<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\WebhookPingCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\WebhookPings\WebhookPingsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class WebhookPings extends BaseResource
{
    public function webhookPingsCreateInstance(
        WebhookPingCreateRequest $payload,
    ): Response {
        return $this->connector->send(new WebhookPingsCreateInstance($payload));
    }
}
