<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * passTypeIds_getInstance
 */
class PassTypeIdsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/passTypeIds/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldspassTypeIds = null,
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
            'fields[passTypeIds]' => $this->fieldspassTypeIds,
            'fields[certificates]' => $this->fieldscertificates,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
