<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_gameCenterAppVersions_getToManyRelated
 */
class GameCenterDetailsGameCenterAppVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/gameCenterAppVersions";
    }

    /**
     * @param  array<int, string>|null  $filterenabled
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterenabled = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAppVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        protected ?int $limit = null,
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
            'filter[enabled]' => $this->filterenabled,
            'fields[gameCenterAppVersions]' => $this->fieldsgameCenterAppVersions,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[compatibilityVersions]' => $this->limitcompatibilityVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
