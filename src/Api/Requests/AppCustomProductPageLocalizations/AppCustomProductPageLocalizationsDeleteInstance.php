<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPageLocalizations_deleteInstance
 */
class AppCustomProductPageLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
