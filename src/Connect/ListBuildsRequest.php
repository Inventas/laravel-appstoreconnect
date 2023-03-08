<?php

namespace Inventas\AppStoreConnectKit\Connect;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListBuildsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds";
    }

}
