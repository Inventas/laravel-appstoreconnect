<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviews;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviews_getInstance
 */
class AppPreviewsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviews/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviews = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappPreviewSets = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appPreviews]' => $this->fieldsappPreviews,
            'fields[appPreviewSets]' => $this->fieldsappPreviewSets,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
