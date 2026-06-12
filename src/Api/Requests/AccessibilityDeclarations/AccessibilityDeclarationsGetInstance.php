<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AccessibilityDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * accessibilityDeclarations_getInstance
 */
class AccessibilityDeclarationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/accessibilityDeclarations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsaccessibilityDeclarations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsaccessibilityDeclarations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[accessibilityDeclarations]' => $this->fieldsaccessibilityDeclarations], static fn (mixed $value): bool => $value !== null);
    }
}
