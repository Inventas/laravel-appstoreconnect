<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviewSets_appPreviews_getToManyRelationship
 */
class AppPreviewSetsAppPreviewsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviewSets/{$this->id}/relationships/appPreviews";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
