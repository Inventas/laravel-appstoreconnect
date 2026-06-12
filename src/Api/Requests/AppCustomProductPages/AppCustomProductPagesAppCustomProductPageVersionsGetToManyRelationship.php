<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPages_appCustomProductPageVersions_getToManyRelationship
 */
class AppCustomProductPagesAppCustomProductPageVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPages/{$this->id}/relationships/appCustomProductPageVersions";
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
