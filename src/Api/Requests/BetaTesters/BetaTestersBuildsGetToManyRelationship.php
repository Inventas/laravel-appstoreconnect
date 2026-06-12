<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_builds_getToManyRelationship
 */
class BetaTestersBuildsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/relationships/builds";
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
