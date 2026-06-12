<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * preReleaseVersions_builds_getToManyRelationship
 */
class PreReleaseVersionsBuildsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/preReleaseVersions/{$this->id}/relationships/builds";
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
