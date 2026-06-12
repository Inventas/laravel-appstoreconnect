<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeImages_getInstance
 */
class GameCenterChallengeImagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeImages/{$this->id}";
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
