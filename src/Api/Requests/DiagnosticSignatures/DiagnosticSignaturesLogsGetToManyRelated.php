<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\DiagnosticSignatures;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * diagnosticSignatures_logs_getToManyRelated
 */
class DiagnosticSignaturesLogsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/diagnosticSignatures/{$this->id}/logs";
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
