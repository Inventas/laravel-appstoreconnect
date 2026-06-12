<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildResponse
 */
class BuildResponse extends SpatieData
{
    /**
     * @param  array<int, AppEncryptionDeclaration|AppStoreVersion|App|BetaAppReviewSubmission|BetaBuildLocalization|BetaGroup|BetaTester|BuildBetaDetail|BuildBundle|BuildIcon|BuildUpload|PrereleaseVersion>|Optional  $included
     */
    public function __construct(
        public Build $data,
        public DocumentLinks $links,
        /** @var array<int, AppEncryptionDeclaration|AppStoreVersion|App|BetaAppReviewSubmission|BetaBuildLocalization|BetaGroup|BetaTester|BuildBetaDetail|BuildBundle|BuildIcon|BuildUpload|PrereleaseVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
