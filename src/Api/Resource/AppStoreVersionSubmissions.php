<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionSubmissions\AppStoreVersionSubmissionsDeleteInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionSubmissions extends BaseResource
{
    public function appStoreVersionSubmissionsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionSubmissionsDeleteInstance($id));
    }
}
