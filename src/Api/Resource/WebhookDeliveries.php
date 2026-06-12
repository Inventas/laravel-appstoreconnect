<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\WebhookDeliveryCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\WebhookDeliveries\WebhookDeliveriesCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class WebhookDeliveries extends BaseResource
{
    public function webhookDeliveriesCreateInstance(
        WebhookDeliveryCreateRequest $payload,
    ): Response {
        return $this->connector->send(new WebhookDeliveriesCreateInstance($payload));
    }
}
