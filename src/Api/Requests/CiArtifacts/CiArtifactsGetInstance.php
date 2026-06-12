<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiArtifacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciArtifacts_getInstance
 */
class CiArtifactsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciArtifacts/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciArtifacts
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciArtifacts = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ciArtifacts]' => $this->fieldsciArtifacts], static fn (mixed $value): bool => $value !== null);
    }
}
