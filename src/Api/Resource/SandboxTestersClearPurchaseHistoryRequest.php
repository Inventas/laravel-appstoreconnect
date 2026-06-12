<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SandboxTestersClearPurchaseHistoryRequestV2createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SandboxTestersClearPurchaseHistoryRequest\SandboxTestersClearPurchaseHistoryRequestV2CreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SandboxTestersClearPurchaseHistoryRequest extends BaseResource
{
    public function sandboxTestersClearPurchaseHistoryRequestV2createInstance(
        SandboxTestersClearPurchaseHistoryRequestV2createRequest $payload,
    ): Response {
        return $this->connector->send(new SandboxTestersClearPurchaseHistoryRequestV2CreateInstance($payload));
    }
}
