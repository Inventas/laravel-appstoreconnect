<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityLocalizations_image_getToOneRelated
 */
class GameCenterActivityLocalizationsImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityLocalizations/{$this->id}/image";
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
