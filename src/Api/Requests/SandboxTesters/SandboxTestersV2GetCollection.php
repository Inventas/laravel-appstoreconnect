<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SandboxTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * sandboxTestersV2_getCollection
 */
class SandboxTestersV2GetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/sandboxTesters';
    }

    /**
     * @param  array<int, string>|null  $fieldssandboxTesters
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldssandboxTesters = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[sandboxTesters]' => $this->fieldssandboxTesters, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
