<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciXcodeVersions_getInstance
 */
class CiXcodeVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciXcodeVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciXcodeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciMacOsVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitmacOsVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[ciXcodeVersions]' => $this->fieldsciXcodeVersions,
            'fields[ciMacOsVersions]' => $this->fieldsciMacOsVersions,
            'include' => $this->include,
            'limit[macOsVersions]' => $this->limitmacOsVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
