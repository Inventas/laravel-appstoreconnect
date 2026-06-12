<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVariants\AlternativeDistributionPackageVariantsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionPackageVariants extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     */
    public function alternativeDistributionPackageVariantsGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionPackageVariants = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionPackageVariantsGetInstance($id, $fieldsalternativeDistributionPackageVariants));
    }
}
