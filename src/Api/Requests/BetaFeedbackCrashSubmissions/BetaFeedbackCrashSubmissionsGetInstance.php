<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackCrashSubmissions_getInstance
 */
class BetaFeedbackCrashSubmissionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackCrashSubmissions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaFeedbackCrashSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaFeedbackCrashSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaFeedbackCrashSubmissions]' => $this->fieldsbetaFeedbackCrashSubmissions,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
