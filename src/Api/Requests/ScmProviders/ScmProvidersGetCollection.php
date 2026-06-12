<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmProviders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmProviders_getCollection
 */
class ScmProvidersGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/scmProviders';
    }

    /**
     * @param  array<int, string>|null  $fieldsscmProviders
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsscmProviders = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[scmProviders]' => $this->fieldsscmProviders, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
