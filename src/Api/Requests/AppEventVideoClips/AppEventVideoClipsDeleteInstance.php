<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventVideoClips_deleteInstance
 */
class AppEventVideoClipsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventVideoClips/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
