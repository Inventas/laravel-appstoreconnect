<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_getInstance
 */
class CiBuildActionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}";
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
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
