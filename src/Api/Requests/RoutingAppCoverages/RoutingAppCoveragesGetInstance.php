<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * routingAppCoverages_getInstance
 */
class RoutingAppCoveragesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/routingAppCoverages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsroutingAppCoverages
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsroutingAppCoverages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[routingAppCoverages]' => $this->fieldsroutingAppCoverages,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
