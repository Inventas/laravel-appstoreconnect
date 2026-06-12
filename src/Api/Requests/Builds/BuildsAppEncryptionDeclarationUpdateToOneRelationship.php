<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Inventas\AppStoreConnectKit\Api\Dto\BuildAppEncryptionDeclarationLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * builds_appEncryptionDeclaration_updateToOneRelationship
 */
class BuildsAppEncryptionDeclarationUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/appEncryptionDeclaration";
    }

    public function __construct(
        protected string $id,
        protected BuildAppEncryptionDeclarationLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
