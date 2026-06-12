<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * PhasedReleaseState
 */
enum PhasedReleaseState: string
{
    case INACTIVE = 'INACTIVE';
    case ACTIVE = 'ACTIVE';
    case PAUSED = 'PAUSED';
    case COMPLETE = 'COMPLETE';
}
