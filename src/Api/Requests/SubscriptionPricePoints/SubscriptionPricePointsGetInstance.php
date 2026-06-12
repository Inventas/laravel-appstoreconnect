<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPricePoints_getInstance
 */
class SubscriptionPricePointsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPricePoints/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionPricePoints]' => $this->fieldssubscriptionPricePoints,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
