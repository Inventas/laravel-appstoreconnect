<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciMacOsVersions_getCollection
 */
class CiMacOsVersionsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/ciMacOsVersions';
    }

    /**
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsciMacOsVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciXcodeVersions = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitxcodeVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[ciMacOsVersions]' => $this->fieldsciMacOsVersions,
            'fields[ciXcodeVersions]' => $this->fieldsciXcodeVersions,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[xcodeVersions]' => $this->limitxcodeVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
