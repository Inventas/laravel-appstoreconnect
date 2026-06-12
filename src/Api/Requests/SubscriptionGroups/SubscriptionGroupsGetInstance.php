<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGroups_getInstance
 */
class SubscriptionGroupsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGroups/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroupLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitsubscriptionGroupLocalizations = null,
        protected ?int $limitsubscriptions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionGroups]' => $this->fieldssubscriptionGroups,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[subscriptionGroupLocalizations]' => $this->fieldssubscriptionGroupLocalizations,
            'include' => $this->include,
            'limit[subscriptionGroupLocalizations]' => $this->limitsubscriptionGroupLocalizations,
            'limit[subscriptions]' => $this->limitsubscriptions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
