<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotSetAppScreenshotsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appScreenshotSets_appScreenshots_replaceToManyRelationship
 */
class AppScreenshotSetsAppScreenshotsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshotSets/{$this->id}/relationships/appScreenshots";
    }

    public function __construct(
        protected string $id,
        protected AppScreenshotSetAppScreenshotsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
