<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Certificates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * certificates_getInstance
 */
class CertificatesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/certificates/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspassTypeIds = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[certificates]' => $this->fieldscertificates,
            'fields[passTypeIds]' => $this->fieldspassTypeIds,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
