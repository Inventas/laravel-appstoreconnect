<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildRuns_actions_getToManyRelationship
 */
class CiBuildRunsActionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildRuns/{$this->id}/relationships/actions";
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
