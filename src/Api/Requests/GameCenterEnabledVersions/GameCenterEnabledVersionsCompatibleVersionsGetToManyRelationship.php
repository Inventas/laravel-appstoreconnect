<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterEnabledVersions_compatibleVersions_getToManyRelationship
 */
class GameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterEnabledVersions/{$this->id}/relationships/compatibleVersions";
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
