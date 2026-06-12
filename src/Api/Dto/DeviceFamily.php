<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * DeviceFamily
 */
enum DeviceFamily: string
{
    case IPHONE = 'IPHONE';
    case IPAD = 'IPAD';
    case APPLE_TV = 'APPLE_TV';
    case APPLE_WATCH = 'APPLE_WATCH';
    case MAC = 'MAC';
    case VISION = 'VISION';
}
