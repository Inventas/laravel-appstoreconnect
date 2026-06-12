<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations;

use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * accessibilityDeclarations_updateInstance
 */
class AccessibilityDeclarationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/accessibilityDeclarations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AccessibilityDeclarationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
