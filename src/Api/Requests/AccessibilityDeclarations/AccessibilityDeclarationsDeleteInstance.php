<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * accessibilityDeclarations_deleteInstance
 */
class AccessibilityDeclarationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/accessibilityDeclarations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
