<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiTestResults\CiTestResultsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiTestResults extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciTestResults
     */
    public function ciTestResultsGetInstance(string $id, ?array $fieldsciTestResults = null): Response
    {
        return $this->connector->send(new CiTestResultsGetInstance($id, $fieldsciTestResults));
    }
}
