<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventLocalizations_appEventScreenshots_getToManyRelationship
 */
class AppEventLocalizationsAppEventScreenshotsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventLocalizations/{$this->id}/relationships/appEventScreenshots";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
