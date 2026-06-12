<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AgeRatingDeclarationAttributes
 */
class AgeRatingDeclarationAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $advertising = new Optional,
        public string|Optional $alcoholTobaccoOrDrugUseOrReferences = new Optional,
        public string|Optional $contests = new Optional,
        public bool|Optional $gambling = new Optional,
        public string|Optional $gamblingSimulated = new Optional,
        public string|Optional $gunsOrOtherWeapons = new Optional,
        public bool|Optional $healthOrWellnessTopics = new Optional,
        public KidsAgeBand|Optional $kidsAgeBand = new Optional,
        public bool|Optional $lootBox = new Optional,
        public string|Optional $medicalOrTreatmentInformation = new Optional,
        public bool|Optional $messagingAndChat = new Optional,
        public bool|Optional $parentalControls = new Optional,
        public string|Optional $profanityOrCrudeHumor = new Optional,
        public bool|Optional $ageAssurance = new Optional,
        public string|Optional $sexualContentGraphicAndNudity = new Optional,
        public string|Optional $sexualContentOrNudity = new Optional,
        public string|Optional $horrorOrFearThemes = new Optional,
        public string|Optional $matureOrSuggestiveThemes = new Optional,
        public bool|Optional $unrestrictedWebAccess = new Optional,
        public bool|Optional $userGeneratedContent = new Optional,
        public string|Optional $violenceCartoonOrFantasy = new Optional,
        public string|Optional $violenceRealisticProlongedGraphicOrSadistic = new Optional,
        public string|Optional $violenceRealistic = new Optional,
        public string|Optional $ageRatingOverride = new Optional,
        public string|Optional $ageRatingOverrideV2 = new Optional,
        public string|Optional $koreaAgeRatingOverride = new Optional,
        public string|Optional $developerAgeRatingInfoUrl = new Optional,
    ) {}
}
