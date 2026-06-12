<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmProviders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmProviders_getInstance
 */
class ScmProvidersGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmProviders/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsscmProviders
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmProviders = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[scmProviders]' => $this->fieldsscmProviders], static fn (mixed $value): bool => $value !== null);
    }
}
