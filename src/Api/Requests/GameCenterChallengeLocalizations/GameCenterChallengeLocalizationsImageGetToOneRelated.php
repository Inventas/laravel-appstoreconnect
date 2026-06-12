<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeLocalizations_image_getToOneRelated
 */
class GameCenterChallengeLocalizationsImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeLocalizations/{$this->id}/image";
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
