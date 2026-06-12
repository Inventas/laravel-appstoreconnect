<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * webhooks_deliveries_getToManyRelated
 */
class WebhooksDeliveriesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/webhooks/{$this->id}/deliveries";
    }

    /**
     * @param  array<int, string>|null  $filterdeliveryState
     * @param  array<int, string>|null  $filtercreatedDateGreaterThanOrEqualTo
     * @param  array<int, string>|null  $filtercreatedDateLessThan
     * @param  array<int, string>|null  $fieldswebhookDeliveries
     * @param  array<int, string>|null  $fieldswebhookEvents
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterdeliveryState = null,
        /** @var array<int, string>|null */
        protected ?array $filtercreatedDateGreaterThanOrEqualTo = null,
        /** @var array<int, string>|null */
        protected ?array $filtercreatedDateLessThan = null,
        /** @var array<int, string>|null */
        protected ?array $fieldswebhookDeliveries = null,
        /** @var array<int, string>|null */
        protected ?array $fieldswebhookEvents = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[deliveryState]' => $this->filterdeliveryState,
            'filter[createdDateGreaterThanOrEqualTo]' => $this->filtercreatedDateGreaterThanOrEqualTo,
            'filter[createdDateLessThan]' => $this->filtercreatedDateLessThan,
            'fields[webhookDeliveries]' => $this->fieldswebhookDeliveries,
            'fields[webhookEvents]' => $this->fieldswebhookEvents,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
