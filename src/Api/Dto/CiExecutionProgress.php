<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * CiExecutionProgress
 */
enum CiExecutionProgress: string
{
    case PENDING = 'PENDING';
    case RUNNING = 'RUNNING';
    case COMPLETE = 'COMPLETE';
}
