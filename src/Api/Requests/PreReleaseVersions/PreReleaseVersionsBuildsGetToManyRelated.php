<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * preReleaseVersions_builds_getToManyRelated
 */
class PreReleaseVersionsBuildsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/preReleaseVersions/{$this->id}/builds";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[builds]' => $this->fieldsbuilds, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
