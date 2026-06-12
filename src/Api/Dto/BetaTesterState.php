<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BetaTesterState
 */
enum BetaTesterState: string
{
    case NOT_INVITED = 'NOT_INVITED';
    case INVITED = 'INVITED';
    case ACCEPTED = 'ACCEPTED';
    case INSTALLED = 'INSTALLED';
    case REVOKED = 'REVOKED';
}
