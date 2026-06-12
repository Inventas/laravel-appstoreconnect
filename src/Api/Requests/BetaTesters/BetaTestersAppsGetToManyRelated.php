<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_apps_getToManyRelated
 */
class BetaTestersAppsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/apps";
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[apps]' => $this->fieldsapps, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
