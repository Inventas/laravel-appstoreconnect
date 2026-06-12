<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appCustomProductPageLocalizations_searchKeywords_createToManyRelationship
 */
class AppCustomProductPageLocalizationsSearchKeywordsCreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}/relationships/searchKeywords";
    }

    public function __construct(
        protected string $id,
        protected AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
