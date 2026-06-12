<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionLocalizationSearchKeywordsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionLocalizations_searchKeywords_deleteToManyRelationship
 */
class AppStoreVersionLocalizationsSearchKeywordsDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionLocalizations/{$this->id}/relationships/searchKeywords";
    }

    public function __construct(
        protected string $id,
        protected AppStoreVersionLocalizationSearchKeywordsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
