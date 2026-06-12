<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivities_versions_getToManyRelationship
 */
class GameCenterActivitiesVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}/relationships/versions";
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
