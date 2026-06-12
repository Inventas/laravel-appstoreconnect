<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_artifacts_getToManyRelated
 */
class CiBuildActionsArtifactsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/artifacts";
    }

    /**
     * @param  array<int, string>|null  $fieldsciArtifacts
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciArtifacts = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciArtifacts]' => $this->fieldsciArtifacts, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
