<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets;

use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewSetAppPreviewsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appPreviewSets_appPreviews_replaceToManyRelationship
 */
class AppPreviewSetsAppPreviewsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviewSets/{$this->id}/relationships/appPreviews";
    }

    public function __construct(
        protected string $id,
        protected AppPreviewSetAppPreviewsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
