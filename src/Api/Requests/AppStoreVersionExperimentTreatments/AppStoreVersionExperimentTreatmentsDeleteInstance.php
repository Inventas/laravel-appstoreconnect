<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperimentTreatments_deleteInstance
 */
class AppStoreVersionExperimentTreatmentsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperimentTreatments/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
