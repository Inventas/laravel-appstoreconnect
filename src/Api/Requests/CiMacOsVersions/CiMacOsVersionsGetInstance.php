<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciMacOsVersions_getInstance
 */
class CiMacOsVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciMacOsVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciMacOsVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciXcodeVersions = null,
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
            'include' => $this->include,
            'limit[xcodeVersions]' => $this->limitxcodeVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
