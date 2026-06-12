<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Certificates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * certificates_getCollection
 */
class CertificatesGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/certificates';
    }

    /**
     * @param  array<int, string>|null  $filterdisplayName
     * @param  array<int, string>|null  $filtercertificateType
     * @param  array<int, string>|null  $filterserialNumber
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterdisplayName = null,
        /** @var array<int, string>|null */
        protected ?array $filtercertificateType = null,
        /** @var array<int, string>|null */
        protected ?array $filterserialNumber = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspassTypeIds = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[displayName]' => $this->filterdisplayName,
            'filter[certificateType]' => $this->filtercertificateType,
            'filter[serialNumber]' => $this->filterserialNumber,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[certificates]' => $this->fieldscertificates,
            'fields[passTypeIds]' => $this->fieldspassTypeIds,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
