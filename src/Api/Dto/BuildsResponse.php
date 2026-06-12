<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildsResponse
 */
class BuildsResponse extends SpatieData
{
    /**
     * @param  array<int, Build>  $data
     * @param  array<int, AppEncryptionDeclaration|AppStoreVersion|App|BetaAppReviewSubmission|BetaBuildLocalization|BetaGroup|BetaTester|BuildBetaDetail|BuildBundle|BuildIcon|BuildUpload|PrereleaseVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, Build> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppEncryptionDeclaration|AppStoreVersion|App|BetaAppReviewSubmission|BetaBuildLocalization|BetaGroup|BetaTester|BuildBetaDetail|BuildBundle|BuildIcon|BuildUpload|PrereleaseVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
