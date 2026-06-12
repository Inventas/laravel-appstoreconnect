<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\WebhookCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\WebhookUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksDeliveriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksDeliveriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Webhooks\WebhooksUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Webhooks extends BaseResource
{
    public function webhooksCreateInstance(WebhookCreateRequest $payload): Response
    {
        return $this->connector->send(new WebhooksCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldswebhooks
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function webhooksGetInstance(
        string $id,
        ?array $fieldswebhooks = null,
        ?array $fieldsapps = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new WebhooksGetInstance($id, $fieldswebhooks, $fieldsapps, $include));
    }

    public function webhooksDeleteInstance(string $id): Response
    {
        return $this->connector->send(new WebhooksDeleteInstance($id));
    }

    public function webhooksUpdateInstance(
        string $id,
        WebhookUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new WebhooksUpdateInstance($id, $payload));
    }

    public function webhooksDeliveriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new WebhooksDeliveriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdeliveryState
     * @param  array<int, string>|null  $filtercreatedDateGreaterThanOrEqualTo
     * @param  array<int, string>|null  $filtercreatedDateLessThan
     * @param  array<int, string>|null  $fieldswebhookDeliveries
     * @param  array<int, string>|null  $fieldswebhookEvents
     * @param  array<int, string>|null  $include
     */
    public function webhooksDeliveriesGetToManyRelated(
        string $id,
        ?array $filterdeliveryState = null,
        ?array $filtercreatedDateGreaterThanOrEqualTo = null,
        ?array $filtercreatedDateLessThan = null,
        ?array $fieldswebhookDeliveries = null,
        ?array $fieldswebhookEvents = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new WebhooksDeliveriesGetToManyRelated($id, $filterdeliveryState, $filtercreatedDateGreaterThanOrEqualTo, $filtercreatedDateLessThan, $fieldswebhookDeliveries, $fieldswebhookEvents, $limit, $include));
    }
}
