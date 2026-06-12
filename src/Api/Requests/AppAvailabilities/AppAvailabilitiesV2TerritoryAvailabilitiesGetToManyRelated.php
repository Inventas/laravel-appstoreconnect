<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appAvailabilitiesV2_territoryAvailabilities_getToManyRelated
 */
class AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/appAvailabilities/{$this->id}/territoryAvailabilities";
    }

    /**
     * @param  array<int, string>|null  $fieldsterritoryAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritoryAvailabilities = null,
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
            'fields[territoryAvailabilities]' => $this->fieldsterritoryAvailabilities,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
