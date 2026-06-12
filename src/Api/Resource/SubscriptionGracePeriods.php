<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGracePeriodUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGracePeriods\SubscriptionGracePeriodsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGracePeriods\SubscriptionGracePeriodsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionGracePeriods extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     */
    public function subscriptionGracePeriodsGetInstance(
        string $id,
        ?array $fieldssubscriptionGracePeriods = null,
    ): Response {
        return $this->connector->send(new SubscriptionGracePeriodsGetInstance($id, $fieldssubscriptionGracePeriods));
    }

    public function subscriptionGracePeriodsUpdateInstance(
        string $id,
        SubscriptionGracePeriodUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGracePeriodsUpdateInstance($id, $payload));
    }
}
