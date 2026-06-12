<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * DeviceConnectionType
 */
enum DeviceConnectionType: string
{
    case WIFI = 'WIFI';
    case MOBILE_DATA = 'MOBILE_DATA';
    case WIRE = 'WIRE';
    case UNKNOWN = 'UNKNOWN';
    case NONE = 'NONE';
}
