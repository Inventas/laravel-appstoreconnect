<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventLocalizations_deleteInstance
 */
class AppEventLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
