<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations;

use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEncryptionDeclarations_builds_createToManyRelationship
 */
class AppEncryptionDeclarationsBuildsCreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarations/{$this->id}/relationships/builds";
    }

    public function __construct(
        protected string $id,
        protected AppEncryptionDeclarationBuildsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
