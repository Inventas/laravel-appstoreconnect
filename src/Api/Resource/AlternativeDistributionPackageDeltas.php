<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageDeltas\AlternativeDistributionPackageDeltasGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionPackageDeltas extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     */
    public function alternativeDistributionPackageDeltasGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionPackageDeltas = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageDeltasGetInstance($id, $fieldsalternativeDistributionPackageDeltas));
    }
}
