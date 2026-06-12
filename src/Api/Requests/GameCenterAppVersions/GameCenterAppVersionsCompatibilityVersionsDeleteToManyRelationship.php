<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionCompatibilityVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAppVersions_compatibilityVersions_deleteToManyRelationship
 */
class GameCenterAppVersionsCompatibilityVersionsDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAppVersions/{$this->id}/relationships/compatibilityVersions";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAppVersionCompatibilityVersionsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
