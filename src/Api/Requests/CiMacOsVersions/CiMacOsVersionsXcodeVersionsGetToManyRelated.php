<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciMacOsVersions_xcodeVersions_getToManyRelated
 */
class CiMacOsVersionsXcodeVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciMacOsVersions/{$this->id}/xcodeVersions";
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
        protected ?int $limit = null,
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
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[macOsVersions]' => $this->limitmacOsVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
