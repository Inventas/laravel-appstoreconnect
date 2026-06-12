<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionLocalizations_getInstance
 */
class SubscriptionLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionLocalizations
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionLocalizations]' => $this->fieldssubscriptionLocalizations,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
