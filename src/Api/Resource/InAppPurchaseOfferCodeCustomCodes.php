<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCustomCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCustomCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes\InAppPurchaseOfferCodeCustomCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes\InAppPurchaseOfferCodeCustomCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes\InAppPurchaseOfferCodeCustomCodesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseOfferCodeCustomCodes extends BaseResource
{
    public function inAppPurchaseOfferCodeCustomCodesCreateInstance(
        InAppPurchaseOfferCodeCustomCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeCustomCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodeCustomCodesGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        ?array $fieldsactors = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeCustomCodesGetInstance($id, $fieldsinAppPurchaseOfferCodeCustomCodes, $fieldsactors, $include));
    }

    public function inAppPurchaseOfferCodeCustomCodesUpdateInstance(
        string $id,
        InAppPurchaseOfferCodeCustomCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodeCustomCodesUpdateInstance($id, $payload));
    }
}
