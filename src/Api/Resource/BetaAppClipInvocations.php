<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocations\BetaAppClipInvocationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocations\BetaAppClipInvocationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocations\BetaAppClipInvocationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocations\BetaAppClipInvocationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaAppClipInvocations extends BaseResource
{
    public function betaAppClipInvocationsCreateInstance(
        BetaAppClipInvocationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppClipInvocationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocations
     * @param  array<int, string>|null  $fieldsbetaAppClipInvocationLocalizations
     * @param  array<int, string>|null  $include
     */
    public function betaAppClipInvocationsGetInstance(
        string $id,
        ?array $fieldsbetaAppClipInvocations = null,
        ?array $fieldsbetaAppClipInvocationLocalizations = null,
        ?array $include = null,
        ?int $limitbetaAppClipInvocationLocalizations = null,
    ): Response {
        return $this->connector->send(new BetaAppClipInvocationsGetInstance($id, $fieldsbetaAppClipInvocations, $fieldsbetaAppClipInvocationLocalizations, $include, $limitbetaAppClipInvocationLocalizations));
    }

    public function betaAppClipInvocationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaAppClipInvocationsDeleteInstance($id));
    }

    public function betaAppClipInvocationsUpdateInstance(
        string $id,
        BetaAppClipInvocationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppClipInvocationsUpdateInstance($id, $payload));
    }
}
