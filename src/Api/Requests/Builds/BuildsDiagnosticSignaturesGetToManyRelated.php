<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_diagnosticSignatures_getToManyRelated
 */
class BuildsDiagnosticSignaturesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/diagnosticSignatures";
    }

    /**
     * @param  array<int, string>|null  $filterdiagnosticType
     * @param  array<int, string>|null  $fieldsdiagnosticSignatures
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterdiagnosticType = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsdiagnosticSignatures = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[diagnosticType]' => $this->filterdiagnosticType,
            'fields[diagnosticSignatures]' => $this->fieldsdiagnosticSignatures,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
