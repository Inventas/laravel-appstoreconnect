<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations\BetaAppClipInvocationLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations\BetaAppClipInvocationLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations\BetaAppClipInvocationLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaAppClipInvocationLocalizations extends BaseResource
{
    public function betaAppClipInvocationLocalizationsCreateInstance(
        BetaAppClipInvocationLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppClipInvocationLocalizationsCreateInstance($payload));
    }

    public function betaAppClipInvocationLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaAppClipInvocationLocalizationsDeleteInstance($id));
    }

    public function betaAppClipInvocationLocalizationsUpdateInstance(
        string $id,
        BetaAppClipInvocationLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppClipInvocationLocalizationsUpdateInstance($id, $payload));
    }
}
