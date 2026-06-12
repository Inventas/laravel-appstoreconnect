<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAppVersions_compatibilityVersions_getToManyRelationship
 */
class GameCenterAppVersionsCompatibilityVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAppVersions/{$this->id}/relationships/compatibilityVersions";
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
