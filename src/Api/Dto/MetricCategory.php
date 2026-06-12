<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * MetricCategory
 */
enum MetricCategory: string
{
    case HANG = 'HANG';
    case LAUNCH = 'LAUNCH';
    case MEMORY = 'MEMORY';
    case DISK = 'DISK';
    case BATTERY = 'BATTERY';
    case TERMINATION = 'TERMINATION';
    case ANIMATION = 'ANIMATION';
    case STORAGE = 'STORAGE';
}
