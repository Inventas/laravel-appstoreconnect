<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionGroups_subscriptionGroupLocalizations_getToManyRelationship
 */
class SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionGroups/{$this->id}/relationships/subscriptionGroupLocalizations";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
