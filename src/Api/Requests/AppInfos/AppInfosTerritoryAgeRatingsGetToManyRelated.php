<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_territoryAgeRatings_getToManyRelated
 */
class AppInfosTerritoryAgeRatingsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}/territoryAgeRatings";
    }

    /**
     * @param  array<int, string>|null  $fieldsterritoryAgeRatings
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritoryAgeRatings = null,
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
            'fields[territoryAgeRatings]' => $this->fieldsterritoryAgeRatings,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
