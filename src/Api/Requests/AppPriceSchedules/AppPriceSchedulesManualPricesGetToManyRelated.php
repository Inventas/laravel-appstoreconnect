<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPriceSchedules_manualPrices_getToManyRelated
 */
class AppPriceSchedulesManualPricesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPriceSchedules/{$this->id}/manualPrices";
    }

    /**
     * @param  array<int, string>|null  $filterstartDate
     * @param  array<int, string>|null  $filterendDate
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterstartDate = null,
        /** @var array<int, string>|null */
        protected ?array $filterendDate = null,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPrices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPricePoints = null,
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
            'filter[startDate]' => $this->filterstartDate,
            'filter[endDate]' => $this->filterendDate,
            'filter[territory]' => $this->filterterritory,
            'fields[appPrices]' => $this->fieldsappPrices,
            'fields[appPricePoints]' => $this->fieldsappPricePoints,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
