<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmProviders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmProviders_repositories_getToManyRelationship
 */
class ScmProvidersRepositoriesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmProviders/{$this->id}/relationships/repositories";
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
