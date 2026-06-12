<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseContents\InAppPurchaseContentsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseContents extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseContentsGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseContents = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseContentsGetInstance($id, $fieldsinAppPurchaseContents, $fieldsinAppPurchases, $include));
    }
}
