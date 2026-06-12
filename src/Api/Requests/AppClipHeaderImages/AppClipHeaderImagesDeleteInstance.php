<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipHeaderImages_deleteInstance
 */
class AppClipHeaderImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipHeaderImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
