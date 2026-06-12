<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appAvailabilitiesV2_territoryAvailabilities_getToManyRelationship
 */
class AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/appAvailabilities/{$this->id}/relationships/territoryAvailabilities";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
