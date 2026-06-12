<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementResponse
 */
class EndUserLicenseAgreementResponse extends SpatieData
{
    /**
     * @param  array<int, App|Territory>|Optional  $included
     */
    public function __construct(
        public EndUserLicenseAgreement $data,
        public DocumentLinks $links,
        /** @var array<int, App|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
