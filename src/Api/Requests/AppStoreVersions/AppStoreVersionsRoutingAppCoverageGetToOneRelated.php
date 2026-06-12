<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_routingAppCoverage_getToOneRelated
 */
class AppStoreVersionsRoutingAppCoverageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/routingAppCoverage";
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
