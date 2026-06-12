<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_backgroundAssets_getToManyRelationship
 */
class AppsBackgroundAssetsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/backgroundAssets";
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
