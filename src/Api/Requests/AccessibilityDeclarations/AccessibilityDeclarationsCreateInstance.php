<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations;

use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * accessibilityDeclarations_createInstance
 */
class AccessibilityDeclarationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/accessibilityDeclarations';
    }

    public function __construct(
        protected AccessibilityDeclarationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
