<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_accessibilityDeclarations_getToManyRelated
 */
class AppsAccessibilityDeclarationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/accessibilityDeclarations";
    }

    /**
     * @param  array<int, string>|null  $filterdeviceFamily
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsaccessibilityDeclarations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterdeviceFamily = null,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsaccessibilityDeclarations = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[deviceFamily]' => $this->filterdeviceFamily,
            'filter[state]' => $this->filterstate,
            'fields[accessibilityDeclarations]' => $this->fieldsaccessibilityDeclarations,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
