<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciXcodeVersions_macOsVersions_getToManyRelationship
 */
class CiXcodeVersionsMacOsVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciXcodeVersions/{$this->id}/relationships/macOsVersions";
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
