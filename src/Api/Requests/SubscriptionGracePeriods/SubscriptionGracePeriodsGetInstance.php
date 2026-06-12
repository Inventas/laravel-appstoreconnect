<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGracePeriods;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGracePeriods_getInstance
 */
class SubscriptionGracePeriodsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGracePeriods/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGracePeriods = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[subscriptionGracePeriods]' => $this->fieldssubscriptionGracePeriods], static fn (mixed $value): bool => $value !== null);
    }
}
