<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeVersions_defaultImage_getToOneRelated
 */
class GameCenterChallengeVersionsDefaultImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeVersions/{$this->id}/defaultImage";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeImages = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[gameCenterChallengeImages]' => $this->fieldsgameCenterChallengeImages], static fn (mixed $value): bool => $value !== null);
    }
}
