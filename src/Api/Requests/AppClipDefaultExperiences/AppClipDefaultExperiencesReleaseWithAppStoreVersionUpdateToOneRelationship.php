<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipDefaultExperiences_releaseWithAppStoreVersion_updateToOneRelationship
 */
class AppClipDefaultExperiencesReleaseWithAppStoreVersionUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperiences/{$this->id}/relationships/releaseWithAppStoreVersion";
    }

    public function __construct(
        protected string $id,
        protected AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
