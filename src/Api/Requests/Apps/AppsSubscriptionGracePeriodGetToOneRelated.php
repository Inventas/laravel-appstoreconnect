<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_subscriptionGracePeriod_getToOneRelated
 */
class AppsSubscriptionGracePeriodGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/subscriptionGracePeriod";
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
