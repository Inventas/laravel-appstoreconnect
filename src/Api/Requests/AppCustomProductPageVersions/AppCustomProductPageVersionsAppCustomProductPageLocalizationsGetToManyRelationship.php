<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageVersions_appCustomProductPageLocalizations_getToManyRelationship
 */
class AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageVersions/{$this->id}/relationships/appCustomProductPageLocalizations";
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
