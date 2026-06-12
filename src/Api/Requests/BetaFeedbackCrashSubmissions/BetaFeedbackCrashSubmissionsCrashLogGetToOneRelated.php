<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackCrashSubmissions_crashLog_getToOneRelated
 */
class BetaFeedbackCrashSubmissionsCrashLogGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackCrashSubmissions/{$this->id}/crashLog";
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
