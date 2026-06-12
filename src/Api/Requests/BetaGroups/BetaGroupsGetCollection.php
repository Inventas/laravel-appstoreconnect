<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaGroups_getCollection
 */
class BetaGroupsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaGroups';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterisInternalGroup
     * @param  array<int, string>|null  $filterpublicLinkEnabled
     * @param  array<int, string>|null  $filterpublicLinkLimitEnabled
     * @param  array<int, string>|null  $filterpublicLink
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterisInternalGroup = null,
        /** @var array<int, string>|null */
        protected ?array $filterpublicLinkEnabled = null,
        /** @var array<int, string>|null */
        protected ?array $filterpublicLinkLimitEnabled = null,
        /** @var array<int, string>|null */
        protected ?array $filterpublicLink = null,
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaRecruitmentCriteria = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbetaTesters = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[isInternalGroup]' => $this->filterisInternalGroup,
            'filter[publicLinkEnabled]' => $this->filterpublicLinkEnabled,
            'filter[publicLinkLimitEnabled]' => $this->filterpublicLinkLimitEnabled,
            'filter[publicLink]' => $this->filterpublicLink,
            'filter[app]' => $this->filterapp,
            'filter[builds]' => $this->filterbuilds,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[apps]' => $this->fieldsapps,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'fields[betaRecruitmentCriteria]' => $this->fieldsbetaRecruitmentCriteria,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[betaTesters]' => $this->limitbetaTesters,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
