<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperienceLocalizations_deleteInstance
 */
class AppClipDefaultExperienceLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperienceLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
