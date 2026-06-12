<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_preReleaseVersion_getToOneRelated
 */
class BuildsPreReleaseVersionGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/preReleaseVersion";
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[preReleaseVersions]' => $this->fieldspreReleaseVersions], static fn (mixed $value): bool => $value !== null);
    }
}
