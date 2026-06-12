<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * InAppPurchaseType
 */
enum InAppPurchaseType: string
{
    case CONSUMABLE = 'CONSUMABLE';
    case NON_CONSUMABLE = 'NON_CONSUMABLE';
    case NON_RENEWING_SUBSCRIPTION = 'NON_RENEWING_SUBSCRIPTION';
}
