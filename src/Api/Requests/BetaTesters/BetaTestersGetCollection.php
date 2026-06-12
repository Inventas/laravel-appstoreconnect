<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_getCollection
 */
class BetaTestersGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaTesters';
    }

    /**
     * @param  array<int, string>|null  $filterfirstName
     * @param  array<int, string>|null  $filterlastName
     * @param  array<int, string>|null  $filteremail
     * @param  array<int, string>|null  $filterinviteType
     * @param  array<int, string>|null  $filterapps
     * @param  array<int, string>|null  $filterbetaGroups
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterfirstName = null,
        /** @var array<int, string>|null */
        protected ?array $filterlastName = null,
        /** @var array<int, string>|null */
        protected ?array $filteremail = null,
        /** @var array<int, string>|null */
        protected ?array $filterinviteType = null,
        /** @var array<int, string>|null */
        protected ?array $filterapps = null,
        /** @var array<int, string>|null */
        protected ?array $filterbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitapps = null,
        protected ?int $limitbetaGroups = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[firstName]' => $this->filterfirstName,
            'filter[lastName]' => $this->filterlastName,
            'filter[email]' => $this->filteremail,
            'filter[inviteType]' => $this->filterinviteType,
            'filter[apps]' => $this->filterapps,
            'filter[betaGroups]' => $this->filterbetaGroups,
            'filter[builds]' => $this->filterbuilds,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'fields[apps]' => $this->fieldsapps,
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[builds]' => $this->fieldsbuilds,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[apps]' => $this->limitapps,
            'limit[betaGroups]' => $this->limitbetaGroups,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
