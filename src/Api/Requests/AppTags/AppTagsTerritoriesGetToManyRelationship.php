<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppTags;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appTags_territories_getToManyRelationship
 */
class AppTagsTerritoriesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appTags/{$this->id}/relationships/territories";
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
