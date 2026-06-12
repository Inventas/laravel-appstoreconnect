<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterDetails_challengesMinimumPlatformVersions_replaceToManyRelationship
 */
class GameCenterDetailsChallengesMinimumPlatformVersionsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/relationships/challengesMinimumPlatformVersions";
    }

    public function __construct(
        protected string $id,
        protected GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
