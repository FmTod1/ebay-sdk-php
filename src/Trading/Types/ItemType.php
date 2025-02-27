<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $ApplicationData
 * @property boolean $AutoPay
 * @property \DTS\eBaySDK\Trading\Types\PaymentDetailsType $PaymentDetails
 * @property \DTS\eBaySDK\Trading\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DTS\eBaySDK\Trading\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DTS\eBaySDK\Trading\Types\CharityType $Charity
 * @property \DTS\eBaySDK\Trading\Enums\CountryCodeType $Country
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DTS\eBaySDK\Trading\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property \DTS\eBaySDK\Trading\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DTS\eBaySDK\Trading\Types\ListingDetailsType $ListingDetails
 * @property \DTS\eBaySDK\Trading\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DTS\eBaySDK\Trading\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DTS\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $PrimaryCategory
 * @property \DTS\eBaySDK\Trading\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property bool $PrivateListing
 * @property string $PrivateNotes
 * @property boolean $RelistLink
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ReservePrice
 * @property \DTS\eBaySDK\Trading\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $SecondaryCategory
 * @property \DTS\eBaySDK\Trading\Types\CategoryType $FreeAddedCategory
 * @property \DTS\eBaySDK\Trading\Types\UserType $Seller
 * @property \DTS\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property \DTS\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property \DTS\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DTS\eBaySDK\Trading\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DTS\eBaySDK\Trading\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DTS\eBaySDK\Trading\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $UseTaxTable
 * @property boolean $BuyerResponsibleForShipping
 * @property string $eBayNotes
 * @property integer $QuestionCount
 * @property boolean $Relisted
 * @property integer $QuantityAvailable
 * @property string $SKU
 * @property boolean $CategoryBasedAttributesPrefill
 * @property string $PostalCode
 * @property boolean $ShippingTermsInDescription
 * @property \DTS\eBaySDK\Trading\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property \DTS\eBaySDK\Trading\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DTS\eBaySDK\Trading\Types\NameValueListArrayType $ItemSpecifics
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DTS\eBaySDK\Trading\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DTS\eBaySDK\Trading\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DTS\eBaySDK\Trading\Types\AmountType $BuyerGuaranteePrice
 * @property \DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DTS\eBaySDK\Trading\Types\ReturnPolicyType $ReturnPolicy
 * @property \DTS\eBaySDK\Trading\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\Trading\Types\VariationsType $Variations
 * @property \DTS\eBaySDK\Trading\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DTS\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property \DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VRM
 * @property \DTS\eBaySDK\Trading\Types\QuantityInfoType $QuantityInfo
 * @property \DTS\eBaySDK\Trading\Types\SellerProfilesType $SellerProfiles
 * @property \DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DTS\eBaySDK\Trading\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FloorPrice
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DTS\eBaySDK\Trading\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DTS\eBaySDK\Trading\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DTS\eBaySDK\Trading\Types\DigitalGoodInfoType $DigitalGoodInfo
 * @property boolean $eBayPlus
 * @property boolean $eBayPlusEligible
 * @property boolean $eMailDeliveryAvailable
 * @property boolean $IsSecureDescription
 * @property VideoDetailsType $VideoDetails
 */
class ItemType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationData'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'PaymentDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ],
        'BiddingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BiddingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ],
        'MotorsGermanySearchable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ],
        'BuyerProtection' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ],
        'BuyItNowPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ],
        'CategoryMappingAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ],
        'Charity' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CharityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'DescriptionReviseMode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DescriptionReviseMode'
        ],
        'HitCounter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ListingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ],
        'ListingDesigner' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ListingDesignerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ],
        'ListingDuration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ],
        'ListingEnhancement' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingEnhancement'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Location' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ],
        'LotSize' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'PrimaryCategory' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ],
        'ProductListingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ProductListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'PrivateListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrivateListing'
        ],
        'PrivateNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ],
        'RelistLink' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistLink'
        ],
        'ReservePrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ],
        'ReviseStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ReviseStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ],
        'ScheduleTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ],
        'SecondaryCategory' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ],
        'FreeAddedCategory' => [
            'type' => 'DTS\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ],
        'Seller' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'SellingStatus' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'ShippingDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ShipToLocations' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'StartPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Storefront' => [
            'type' => 'DTS\eBaySDK\Trading\Types\StorefrontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ],
        'SubTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SubTitle'
        ],
        'TimeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ],
        'Title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'UUID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ],
        'VATDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VATDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
        ],
        'SellerVacationNote' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ],
        'WatchCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ],
        'HitCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ],
        'DisableBuyerRequirements' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ],
        'BestOfferDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BestOfferDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ],
        'LocationDefaulted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ],
        'UseTaxTable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ],
        'BuyerResponsibleForShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ],
        'eBayNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
        ],
        'QuestionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ],
        'Relisted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ],
        'QuantityAvailable' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'CategoryBasedAttributesPrefill' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'ShippingTermsInDescription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ],
        'PictureDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PictureDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ],
        'DispatchTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ],
        'SellerContactDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ],
        'TotalQuestionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ],
        'ProxyItem' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ],
        'ExtendedSellerContactDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ExtendedContactDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'NewLeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
        ],
        'ItemSpecifics' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'ClassifiedAdPayPerLeadFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ],
        'ApplyBuyerProtection' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerProtectionDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ],
        'ListingSubtype2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ],
        'MechanicalCheckAccepted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ],
        'UpdateSellerInfo' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ],
        'UpdateReturnPolicy' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ],
        'ItemPolicyViolation' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemPolicyViolationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ],
        'CrossBorderTrade' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
        ],
        'BusinessSellerDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BusinessSellerDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerRequirementDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ReturnPolicy' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ],
        'PaymentAllowedSite' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ],
        'InventoryTrackingMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'Variations' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'ItemCompatibilityList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemCompatibilityListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ],
        'ItemCompatibilityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ],
        'ConditionID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ],
        'ConditionDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ],
        'ConditionDisplayName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ],
        'TaxCategory' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ],
        'QuantityAvailableHint' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ],
        'QuantityThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'SellerProvidedTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ],
        'VIN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VIN'
        ],
        'VRM' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VRM'
        ],
        'QuantityInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'SellerProfiles' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellerProfilesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ],
        'ShippingServiceCostOverrideList' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ],
        'ShippingPackageDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ShipPackageDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ],
        'TopRatedListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ],
        'QuantityRestrictionPerBuyer' => [
            'type' => 'DTS\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ],
        'FloorPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ],
        'CeilingPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ],
        'IsIntermediatedShippingEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ],
        'UnitInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UnitInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ],
        'RelistParentID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ],
        'ConditionDefinition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDefinition'
        ],
        'HideFromSearch' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ],
        'ReasonHideFromSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
        ],
        'IncludeRecommendations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ],
        'PickupInStoreDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PickupInStoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
        ],
        'eBayNowEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ],
        'eBayNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ],
        'IgnoreQuantity' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ],
        'AvailableForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ],
        'LiveAuction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LiveAuction'
        ],
        'DigitalGoodInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\DigitalGoodInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodInfo'
        ],
        'eBayPlus' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlus'
        ],
        'eBayPlusEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusEligible'
        ],
        'eMailDeliveryAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eMailDeliveryAvailable'
        ],
        'IsSecureDescription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsSecureDescription'
        ],
        'VideoDetails' => [
            'type' => 'DTS\eBaySDK\Trading\Types\VideoDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VideoDetails'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
