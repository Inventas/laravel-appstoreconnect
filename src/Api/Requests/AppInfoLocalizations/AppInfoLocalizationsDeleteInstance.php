<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfoLocalizations_deleteInstance
 */
class AppInfoLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfoLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
