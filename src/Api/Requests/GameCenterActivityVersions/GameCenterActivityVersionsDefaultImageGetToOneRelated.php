<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityVersions_defaultImage_getToOneRelated
 */
class GameCenterActivityVersionsDefaultImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersions/{$this->id}/defaultImage";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityImages = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[gameCenterActivityImages]' => $this->fieldsgameCenterActivityImages], static fn (mixed $value): bool => $value !== null);
    }
}
