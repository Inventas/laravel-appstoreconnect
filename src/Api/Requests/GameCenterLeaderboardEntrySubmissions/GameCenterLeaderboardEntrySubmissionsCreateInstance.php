<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardEntrySubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardEntrySubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardEntrySubmissions_createInstance
 */
class GameCenterLeaderboardEntrySubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardEntrySubmissions';
    }

    public function __construct(
        protected GameCenterLeaderboardEntrySubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
