<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildRuns_actions_getToManyRelated
 */
class CiBuildRunsActionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildRuns/{$this->id}/actions";
    }

    /**
     * @param  array<int, string>|null  $fieldsciBuildActions
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciBuildActions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciBuildRuns = null,
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
            'fields[ciBuildActions]' => $this->fieldsciBuildActions,
            'fields[ciBuildRuns]' => $this->fieldsciBuildRuns,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
