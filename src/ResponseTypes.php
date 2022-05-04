<?php

namespace Ebay\Commerce\Notification;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'fetchItemAspects' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCategoriesAspectResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDefaultCategoryTreeId' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\BaseCategoryTree',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategoryTree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategoryTree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySubtree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySubtree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySuggestions' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySuggestionResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemAspectsForCategory' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\AspectMetadata',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityProperties' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityMetadataResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityPropertyValues' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityPropertyValuesResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPublicKey' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\PublicKey',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopic' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Topic',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopics' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\TopicSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscriptions' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\SubscriptionSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createSubscription' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscription' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Subscription',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'enableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'disableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'test' => [
            '202.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestinations' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\DestinationSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createDestination' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestination' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Destination',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getConfig' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Config',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateConfig' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
