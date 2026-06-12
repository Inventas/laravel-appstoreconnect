<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaBuildLocalizations_getCollection
 */
class BetaBuildLocalizationsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaBuildLocalizations';
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuild = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaBuildLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
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
            'filter[locale]' => $this->filterlocale,
            'filter[build]' => $this->filterbuild,
            'fields[betaBuildLocalizations]' => $this->fieldsbetaBuildLocalizations,
            'fields[builds]' => $this->fieldsbuilds,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
