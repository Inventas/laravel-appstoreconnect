<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_gameCenterAppVersion_getToOneRelated
 */
class AppStoreVersionsGameCenterAppVersionGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/gameCenterAppVersion";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAppVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcompatibilityVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterAppVersions]' => $this->fieldsgameCenterAppVersions,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'include' => $this->include,
            'limit[compatibilityVersions]' => $this->limitcompatibilityVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
