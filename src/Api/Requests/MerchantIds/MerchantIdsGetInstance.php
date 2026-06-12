<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * merchantIds_getInstance
 */
class MerchantIdsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/merchantIds/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsmerchantIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsmerchantIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcertificates = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[merchantIds]' => $this->fieldsmerchantIds,
            'fields[certificates]' => $this->fieldscertificates,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
