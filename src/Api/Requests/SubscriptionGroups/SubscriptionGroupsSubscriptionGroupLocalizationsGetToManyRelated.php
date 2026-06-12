<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGroups_subscriptionGroupLocalizations_getToManyRelated
 */
class SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGroups/{$this->id}/subscriptionGroupLocalizations";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroupLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroups = null,
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
            'fields[subscriptionGroupLocalizations]' => $this->fieldssubscriptionGroupLocalizations,
            'fields[subscriptionGroups]' => $this->fieldssubscriptionGroups,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
