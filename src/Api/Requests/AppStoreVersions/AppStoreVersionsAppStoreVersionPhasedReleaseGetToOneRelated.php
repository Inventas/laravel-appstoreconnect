<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionPhasedRelease_getToOneRelated
 */
class AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/appStoreVersionPhasedRelease";
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionPhasedReleases
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionPhasedReleases = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appStoreVersionPhasedReleases]' => $this->fieldsappStoreVersionPhasedReleases], static fn (mixed $value): bool => $value !== null);
    }
}
