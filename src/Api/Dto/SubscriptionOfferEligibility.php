<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * SubscriptionOfferEligibility
 */
enum SubscriptionOfferEligibility: string
{
    case STACK_WITH_INTRO_OFFERS = 'STACK_WITH_INTRO_OFFERS';
    case REPLACE_INTRO_OFFERS = 'REPLACE_INTRO_OFFERS';
}
