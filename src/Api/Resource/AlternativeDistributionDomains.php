<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AlternativeDistributionDomainCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains\AlternativeDistributionDomainsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains\AlternativeDistributionDomainsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains\AlternativeDistributionDomainsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains\AlternativeDistributionDomainsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AlternativeDistributionDomains extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionDomains
     */
    public function alternativeDistributionDomainsGetCollection(
        ?array $fieldsalternativeDistributionDomains = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionDomainsGetCollection($fieldsalternativeDistributionDomains, $limit));
    }

    public function alternativeDistributionDomainsCreateInstance(
        AlternativeDistributionDomainCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AlternativeDistributionDomainsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionDomains
     */
    public function alternativeDistributionDomainsGetInstance(
        string $id,
        ?array $fieldsalternativeDistributionDomains = null,
    ): Response {
        return $this->connector->send(new AlternativeDistributionDomainsGetInstance($id, $fieldsalternativeDistributionDomains));
    }

    public function alternativeDistributionDomainsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AlternativeDistributionDomainsDeleteInstance($id));
    }
}
