<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appAvailabilityV2_getToOneRelated
 */
class AppsAppAvailabilityV2GetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appAvailabilityV2";
    }

    /**
     * @param  array<int, string>|null  $fieldsappAvailabilities
     * @param  array<int, string>|null  $fieldsterritoryAvailabilities
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritoryAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitterritoryAvailabilities = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appAvailabilities]' => $this->fieldsappAvailabilities,
            'fields[territoryAvailabilities]' => $this->fieldsterritoryAvailabilities,
            'include' => $this->include,
            'limit[territoryAvailabilities]' => $this->limitterritoryAvailabilities,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
