<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviewSets_deleteInstance
 */
class AppPreviewSetsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviewSets/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
