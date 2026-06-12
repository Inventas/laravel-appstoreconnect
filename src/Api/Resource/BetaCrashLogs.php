<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BetaCrashLogs\BetaCrashLogsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaCrashLogs extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbetaCrashLogs
     */
    public function betaCrashLogsGetInstance(string $id, ?array $fieldsbetaCrashLogs = null): Response
    {
        return $this->connector->send(new BetaCrashLogsGetInstance($id, $fieldsbetaCrashLogs));
    }
}
