<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Nominations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * nominations_getCollection
 */
class NominationsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/nominations';
    }

    /**
     * @param  array<int, string>  $filterstate
     * @param  array<int, string>|null  $filtertype
     * @param  array<int, string>|null  $filterhasInAppEvents
     * @param  array<int, string>|null  $filterrelatedApps
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsnominations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filterstate,
        /** @var array<int, string>|null */
        protected ?array $filtertype = null,
        /** @var array<int, string>|null */
        protected ?array $filterhasInAppEvents = null,
        /** @var array<int, string>|null */
        protected ?array $filterrelatedApps = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsnominations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsactors = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitinAppEvents = null,
        protected ?int $limitrelatedApps = null,
        protected ?int $limitsupportedTerritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[state]' => $this->filterstate,
            'filter[type]' => $this->filtertype,
            'filter[hasInAppEvents]' => $this->filterhasInAppEvents,
            'filter[relatedApps]' => $this->filterrelatedApps,
            'sort' => $this->sort,
            'fields[nominations]' => $this->fieldsnominations,
            'fields[apps]' => $this->fieldsapps,
            'fields[actors]' => $this->fieldsactors,
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[inAppEvents]' => $this->limitinAppEvents,
            'limit[relatedApps]' => $this->limitrelatedApps,
            'limit[supportedTerritories]' => $this->limitsupportedTerritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
