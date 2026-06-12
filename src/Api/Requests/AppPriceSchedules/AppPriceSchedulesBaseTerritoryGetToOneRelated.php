<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPriceSchedules_baseTerritory_getToOneRelated
 */
class AppPriceSchedulesBaseTerritoryGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPriceSchedules/{$this->id}/baseTerritory";
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[territories]' => $this->fieldsterritories], static fn (mixed $value): bool => $value !== null);
    }
}
