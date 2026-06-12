<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaCrashLogs;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaCrashLogs_getInstance
 */
class BetaCrashLogsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaCrashLogs/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaCrashLogs
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaCrashLogs = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaCrashLogs]' => $this->fieldsbetaCrashLogs], static fn (mixed $value): bool => $value !== null);
    }
}
