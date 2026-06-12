<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionKeys_getCollection
 */
class AlternativeDistributionKeysGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/alternativeDistributionKeys';
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionKeys
     */
    public function __construct(
        protected ?bool $existsapp = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionKeys = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'exists[app]' => $this->existsapp,
            'fields[alternativeDistributionKeys]' => $this->fieldsalternativeDistributionKeys,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
