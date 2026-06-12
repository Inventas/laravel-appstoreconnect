<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppResponse
 */
class AppResponse extends SpatieData
{
    /**
     * @param  array<int, AndroidToIosAppMappingDetail|AppClip|AppCustomProductPage|AppEncryptionDeclaration|AppEvent|AppInfo|AppStoreVersionExperimentV2|AppStoreVersion|BetaAppLocalization|BetaAppReviewDetail|BetaGroup|BetaLicenseAgreement|BuildIcon|Build|CiProduct|EndUserLicenseAgreement|GameCenterDetail|GameCenterEnabledVersion|InAppPurchase|PrereleaseVersion|PromotedPurchase|ReviewSubmission|SubscriptionGracePeriod|SubscriptionGroup>|Optional  $included
     */
    public function __construct(
        public App $data,
        public DocumentLinks $links,
        /** @var array<int, AndroidToIosAppMappingDetail|AppClip|AppCustomProductPage|AppEncryptionDeclaration|AppEvent|AppInfo|AppStoreVersionExperimentV2|AppStoreVersion|BetaAppLocalization|BetaAppReviewDetail|BetaGroup|BetaLicenseAgreement|BuildIcon|Build|CiProduct|EndUserLicenseAgreement|GameCenterDetail|GameCenterEnabledVersion|InAppPurchase|PrereleaseVersion|PromotedPurchase|ReviewSubmission|SubscriptionGracePeriod|SubscriptionGroup>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
