<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackScreenshotSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackScreenshotSubmissions_getInstance
 */
class BetaFeedbackScreenshotSubmissionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackScreenshotSubmissions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaFeedbackScreenshotSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaFeedbackScreenshotSubmissions = null,
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
            'fields[betaFeedbackScreenshotSubmissions]' => $this->fieldsbetaFeedbackScreenshotSubmissions,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
