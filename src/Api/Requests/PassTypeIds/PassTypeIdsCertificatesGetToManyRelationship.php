<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * passTypeIds_certificates_getToManyRelationship
 */
class PassTypeIdsCertificatesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/passTypeIds/{$this->id}/relationships/certificates";
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
