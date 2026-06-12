<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperiences_deleteInstance
 */
class AppClipDefaultExperiencesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperiences/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
