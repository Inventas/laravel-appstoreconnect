<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperimentTreatmentLocalizations_deleteInstance
 */
class AppStoreVersionExperimentTreatmentLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperimentTreatmentLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
