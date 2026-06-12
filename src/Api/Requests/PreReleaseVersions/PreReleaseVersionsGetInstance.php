<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * preReleaseVersions_getInstance
 */
class PreReleaseVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/preReleaseVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[preReleaseVersions]' => $this->fieldspreReleaseVersions,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
