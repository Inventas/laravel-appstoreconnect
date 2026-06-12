<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBundles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBundles_betaAppClipInvocations_getToManyRelated
 */
class BuildBundlesBetaAppClipInvocationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBundles/{$this->id}/betaAppClipInvocations";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocations
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocationLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppClipInvocations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppClipInvocationLocalizations = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbetaAppClipInvocationLocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaAppClipInvocations]' => $this->fieldsbetaAppClipInvocations,
            'fields[betaAppClipInvocationLocalizations]' => $this->fieldsbetaAppClipInvocationLocalizations,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[betaAppClipInvocationLocalizations]' => $this->limitbetaAppClipInvocationLocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
