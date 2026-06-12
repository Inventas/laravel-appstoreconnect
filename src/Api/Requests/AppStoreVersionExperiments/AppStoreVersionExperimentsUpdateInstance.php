<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionExperiments_updateInstance
 */
class AppStoreVersionExperimentsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperiments/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreVersionExperimentUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
