<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Inventas\AppStoreConnectKit\Api\Dto\AppPromotedPurchasesLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * apps_promotedPurchases_replaceToManyRelationship
 */
class AppsPromotedPurchasesReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/promotedPurchases";
    }

    public function __construct(
        protected string $id,
        protected AppPromotedPurchasesLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
