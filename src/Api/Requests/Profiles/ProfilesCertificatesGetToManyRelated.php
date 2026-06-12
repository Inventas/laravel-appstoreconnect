<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_certificates_getToManyRelated
 */
class ProfilesCertificatesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}/certificates";
    }

    /**
     * @param  array<int, string>|null  $fieldscertificates
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[certificates]' => $this->fieldscertificates, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
