<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BundleIdCapabilityCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BundleIdCapabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities\BundleIdCapabilitiesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities\BundleIdCapabilitiesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities\BundleIdCapabilitiesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BundleIdCapabilities extends BaseResource
{
    public function bundleIdCapabilitiesCreateInstance(
        BundleIdCapabilityCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BundleIdCapabilitiesCreateInstance($payload));
    }

    public function bundleIdCapabilitiesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BundleIdCapabilitiesDeleteInstance($id));
    }

    public function bundleIdCapabilitiesUpdateInstance(
        string $id,
        BundleIdCapabilityUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BundleIdCapabilitiesUpdateInstance($id, $payload));
    }
}
