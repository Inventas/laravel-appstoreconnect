<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_preReleaseVersions_getToManyRelated
 */
class AppsPreReleaseVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/preReleaseVersions";
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[preReleaseVersions]' => $this->fieldspreReleaseVersions, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
