<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPricePointsV3_equalizations_getToManyRelated
 */
class AppPricePointsV3EqualizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/appPricePoints/{$this->id}/equalizations";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
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
            'filter[territory]' => $this->filterterritory,
            'fields[appPricePoints]' => $this->fieldsappPricePoints,
            'fields[apps]' => $this->fieldsapps,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
