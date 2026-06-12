<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppLocalizations_getCollection
 */
class BetaAppLocalizationsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppLocalizations';
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterlocale = null,
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
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
            'filter[app]' => $this->filterapp,
            'fields[betaAppLocalizations]' => $this->fieldsbetaAppLocalizations,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
