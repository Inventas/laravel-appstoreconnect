<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_getCollection
 */
class UsersGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/users';
    }

    /**
     * @param  array<int, string>|null  $filterusername
     * @param  array<int, string>|null  $filterroles
     * @param  array<int, string>|null  $filtervisibleApps
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsusers
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterusername = null,
        /** @var array<int, string>|null */
        protected ?array $filterroles = null,
        /** @var array<int, string>|null */
        protected ?array $filtervisibleApps = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsusers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitvisibleApps = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[username]' => $this->filterusername,
            'filter[roles]' => $this->filterroles,
            'filter[visibleApps]' => $this->filtervisibleApps,
            'sort' => $this->sort,
            'fields[users]' => $this->fieldsusers,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[visibleApps]' => $this->limitvisibleApps,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
