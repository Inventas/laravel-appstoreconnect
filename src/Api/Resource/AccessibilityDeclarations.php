<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AccessibilityDeclarationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations\AccessibilityDeclarationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations\AccessibilityDeclarationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations\AccessibilityDeclarationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations\AccessibilityDeclarationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AccessibilityDeclarations extends BaseResource
{
    public function accessibilityDeclarationsCreateInstance(
        AccessibilityDeclarationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AccessibilityDeclarationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsaccessibilityDeclarations
     */
    public function accessibilityDeclarationsGetInstance(
        string $id,
        ?array $fieldsaccessibilityDeclarations = null,
    ): Response {
        return $this->connector->send(new AccessibilityDeclarationsGetInstance($id, $fieldsaccessibilityDeclarations));
    }

    public function accessibilityDeclarationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AccessibilityDeclarationsDeleteInstance($id));
    }

    public function accessibilityDeclarationsUpdateInstance(
        string $id,
        AccessibilityDeclarationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AccessibilityDeclarationsUpdateInstance($id, $payload));
    }
}
