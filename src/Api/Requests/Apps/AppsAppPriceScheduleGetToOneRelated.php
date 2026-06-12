<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appPriceSchedule_getToOneRelated
 */
class AppsAppPriceScheduleGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appPriceSchedule";
    }

    /**
     * @param  array<int, string>|null  $fieldsappPriceSchedules
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPriceSchedules = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitmanualPrices = null,
        protected ?int $limitautomaticPrices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appPriceSchedules]' => $this->fieldsappPriceSchedules,
            'fields[apps]' => $this->fieldsapps,
            'fields[territories]' => $this->fieldsterritories,
            'fields[appPrices]' => $this->fieldsappPrices,
            'include' => $this->include,
            'limit[manualPrices]' => $this->limitmanualPrices,
            'limit[automaticPrices]' => $this->limitautomaticPrices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
