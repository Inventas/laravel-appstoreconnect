<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviewSets_appPreviews_getToManyRelated
 */
class AppPreviewSetsAppPreviewsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviewSets/{$this->id}/appPreviews";
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
        protected ?int $limit = null,
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
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
