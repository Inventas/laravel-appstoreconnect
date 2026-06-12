<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentTreatmentUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionExperimentTreatments_updateInstance
 */
class AppStoreVersionExperimentTreatmentsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperimentTreatments/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreVersionExperimentTreatmentUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
