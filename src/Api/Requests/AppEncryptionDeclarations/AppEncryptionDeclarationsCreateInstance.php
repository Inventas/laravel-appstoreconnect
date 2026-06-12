<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations;

use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEncryptionDeclarations_createInstance
 */
class AppEncryptionDeclarationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appEncryptionDeclarations';
    }

    public function __construct(
        protected AppEncryptionDeclarationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
