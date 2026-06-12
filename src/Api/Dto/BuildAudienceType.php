<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BuildAudienceType
 */
enum BuildAudienceType: string
{
    case INTERNAL_ONLY = 'INTERNAL_ONLY';
    case APP_STORE_ELIGIBLE = 'APP_STORE_ELIGIBLE';
}
