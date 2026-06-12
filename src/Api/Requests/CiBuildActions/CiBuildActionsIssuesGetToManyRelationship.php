<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_issues_getToManyRelationship
 */
class CiBuildActionsIssuesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/relationships/issues";
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
