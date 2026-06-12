<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentTreatmentLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionExperimentTreatmentLocalizations_createInstance
 */
class AppStoreVersionExperimentTreatmentLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersionExperimentTreatmentLocalizations';
    }

    public function __construct(
        protected AppStoreVersionExperimentTreatmentLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
