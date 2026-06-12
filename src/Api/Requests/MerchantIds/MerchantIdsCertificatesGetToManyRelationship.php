<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * merchantIds_certificates_getToManyRelationship
 */
class MerchantIdsCertificatesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/merchantIds/{$this->id}/relationships/certificates";
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
