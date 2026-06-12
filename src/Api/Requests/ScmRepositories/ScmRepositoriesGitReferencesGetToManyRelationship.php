<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmRepositories_gitReferences_getToManyRelationship
 */
class ScmRepositoriesGitReferencesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmRepositories/{$this->id}/relationships/gitReferences";
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
