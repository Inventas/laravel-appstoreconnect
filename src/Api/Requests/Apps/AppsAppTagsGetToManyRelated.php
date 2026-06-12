<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appTags_getToManyRelated
 */
class AppsAppTagsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appTags";
    }

    /**
     * @param  array<int, string>|null  $filtervisibleInAppStore
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsappTags
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filtervisibleInAppStore = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappTags = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitterritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[visibleInAppStore]' => $this->filtervisibleInAppStore,
            'sort' => $this->sort,
            'fields[appTags]' => $this->fieldsappTags,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[territories]' => $this->limitterritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
