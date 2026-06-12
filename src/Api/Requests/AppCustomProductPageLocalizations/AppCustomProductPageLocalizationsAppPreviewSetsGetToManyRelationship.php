<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_appPreviewSets_getToManyRelationship
 */
class AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}/relationships/appPreviewSets";
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
