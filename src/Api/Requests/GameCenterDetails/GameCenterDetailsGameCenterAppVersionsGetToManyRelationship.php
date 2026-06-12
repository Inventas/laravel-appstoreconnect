<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_gameCenterAppVersions_getToManyRelationship
 */
class GameCenterDetailsGameCenterAppVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/relationships/gameCenterAppVersions";
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
