<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_certificates_getToManyRelationship
 */
class ProfilesCertificatesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}/relationships/certificates";
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
