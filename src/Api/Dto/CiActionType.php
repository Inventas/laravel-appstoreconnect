<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * CiActionType
 */
enum CiActionType: string
{
    case BUILD = 'BUILD';
    case ANALYZE = 'ANALYZE';
    case TEST = 'TEST';
    case ARCHIVE = 'ARCHIVE';
}
