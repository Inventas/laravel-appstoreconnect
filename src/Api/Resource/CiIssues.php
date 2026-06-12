<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiIssues\CiIssuesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiIssues extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciIssues
     */
    public function ciIssuesGetInstance(string $id, ?array $fieldsciIssues = null): Response
    {
        return $this->connector->send(new CiIssuesGetInstance($id, $fieldsciIssues));
    }
}
