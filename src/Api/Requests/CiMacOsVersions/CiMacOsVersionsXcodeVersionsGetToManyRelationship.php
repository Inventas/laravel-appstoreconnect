<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciMacOsVersions_xcodeVersions_getToManyRelationship
 */
class CiMacOsVersionsXcodeVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciMacOsVersions/{$this->id}/relationships/xcodeVersions";
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
