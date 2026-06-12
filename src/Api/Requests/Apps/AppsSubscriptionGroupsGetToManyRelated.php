<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_subscriptionGroups_getToManyRelated
 */
class AppsSubscriptionGroupsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/subscriptionGroups";
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filtersubscriptionsState
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterreferenceName = null,
        /** @var array<int, string>|null */
        protected ?array $filtersubscriptionsState = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroupLocalizations = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitsubscriptions = null,
        protected ?int $limitsubscriptionGroupLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[referenceName]' => $this->filterreferenceName,
            'filter[subscriptions.state]' => $this->filtersubscriptionsState,
            'sort' => $this->sort,
            'fields[subscriptionGroups]' => $this->fieldssubscriptionGroups,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[subscriptionGroupLocalizations]' => $this->fieldssubscriptionGroupLocalizations,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[subscriptions]' => $this->limitsubscriptions,
            'limit[subscriptionGroupLocalizations]' => $this->limitsubscriptionGroupLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
