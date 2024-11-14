# OpenAPI\Client\PriceListApi

All URIs are relative to https://pricelist.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPriceList()**](PriceListApi.md#createPriceList) | **POST** /pricelist.PriceList/CreatePriceList | Create new list |
| [**deletePriceListItems()**](PriceListApi.md#deletePriceListItems) | **POST** /pricelist.PriceList/DeletePriceListItems | Get prices for items |
| [**getFullPriceItemsByPricelistId()**](PriceListApi.md#getFullPriceItemsByPricelistId) | **POST** /pricelist.PriceList/GetFullPriceItemsByPricelistId | List detailed items |
| [**getPriceList()**](PriceListApi.md#getPriceList) | **POST** /pricelist.PriceList/GetPriceList | Get specific list |
| [**getPriceListByCode()**](PriceListApi.md#getPriceListByCode) | **POST** /pricelist.PriceList/GetPriceListByCode | Get list by code |
| [**getPriceListItems()**](PriceListApi.md#getPriceListItems) | **POST** /pricelist.PriceList/GetPriceListItems | Get items in list |
| [**getPricesItems()**](PriceListApi.md#getPricesItems) | **POST** /pricelist.PriceList/GetPricesItems | Get detailed items |
| [**listFullPriceItemsByPricelistId()**](PriceListApi.md#listFullPriceItemsByPricelistId) | **POST** /pricelist.PriceList/ListFullPriceItemsByPricelistId | List detailed price items for a specific price list |
| [**listPriceLists()**](PriceListApi.md#listPriceLists) | **POST** /pricelist.PriceList/ListPriceLists | List all price lists |
| [**priceListGetPriceItemsByPriceListItemIds()**](PriceListApi.md#priceListGetPriceItemsByPriceListItemIds) | **POST** /pricelist.PriceList/GetPriceItemsByPriceListItemIds |  |
| [**setPriceListItems()**](PriceListApi.md#setPriceListItems) | **POST** /pricelist.PriceList/SetPriceListItems | Set items in list |
| [**updatePriceList()**](PriceListApi.md#updatePriceList) | **POST** /pricelist.PriceList/UpdatePriceList | Update list |


## `createPriceList()`

```php
createPriceList($body): \OpenAPI\Client\Model\PricelistCreatePriceListResponse
```

Create new list

Allows the creation of a new price list with specified details such as code, name, currency, and type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistCreatePriceListRequest(); // \OpenAPI\Client\Model\PricelistCreatePriceListRequest

try {
    $result = $apiInstance->createPriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->createPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistCreatePriceListRequest**](../Model/PricelistCreatePriceListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistCreatePriceListResponse**](../Model/PricelistCreatePriceListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePriceListItems()`

```php
deletePriceListItems($body): object
```

Get prices for items

Deletes specified items from a price list based on their unique identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistDeletePriceListItemsRequest(); // \OpenAPI\Client\Model\PricelistDeletePriceListItemsRequest

try {
    $result = $apiInstance->deletePriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->deletePriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistDeletePriceListItemsRequest**](../Model/PricelistDeletePriceListItemsRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullPriceItemsByPricelistId()`

```php
getFullPriceItemsByPricelistId($body): \OpenAPI\Client\Model\PricelistGetFullPriceItemsResponse
```

List detailed items

Fetches detailed information about items, including historical price data, for a specific price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetFullPriceItemsRequest(); // \OpenAPI\Client\Model\PricelistGetFullPriceItemsRequest

try {
    $result = $apiInstance->getFullPriceItemsByPricelistId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getFullPriceItemsByPricelistId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetFullPriceItemsRequest**](../Model/PricelistGetFullPriceItemsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetFullPriceItemsResponse**](../Model/PricelistGetFullPriceItemsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceList()`

```php
getPriceList($body): \OpenAPI\Client\Model\PricelistGetPriceListResponse
```

Get specific list

Returns information about a particular price list identified by tenant ID and price list ID. The response includes details such as code, name, currency, and type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetPriceListRequest(); // \OpenAPI\Client\Model\PricelistGetPriceListRequest

try {
    $result = $apiInstance->getPriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetPriceListRequest**](../Model/PricelistGetPriceListRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetPriceListResponse**](../Model/PricelistGetPriceListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListByCode()`

```php
getPriceListByCode($body): \OpenAPI\Client\Model\PricelistGetPriceListByCodeResponse
```

Get list by code

Retrieves information about a specific price list using the unique code associated with it. The response includes details such as code, name, currency, and type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetPriceListByCodeRequest(); // \OpenAPI\Client\Model\PricelistGetPriceListByCodeRequest

try {
    $result = $apiInstance->getPriceListByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetPriceListByCodeRequest**](../Model/PricelistGetPriceListByCodeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetPriceListByCodeResponse**](../Model/PricelistGetPriceListByCodeResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListItems()`

```php
getPriceListItems($body): \OpenAPI\Client\Model\PricelistGetPriceListItemsResponse
```

Get items in list

Fetches a paginated list of items associated with a particular price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetPriceListItemsRequest(); // \OpenAPI\Client\Model\PricelistGetPriceListItemsRequest

try {
    $result = $apiInstance->getPriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetPriceListItemsRequest**](../Model/PricelistGetPriceListItemsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetPriceListItemsResponse**](../Model/PricelistGetPriceListItemsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricesItems()`

```php
getPricesItems($body): \OpenAPI\Client\Model\PricelistGetPricesResponse
```

Get detailed items

Retrieves the current prices of specified items considering the provided context, such as currency and market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetPricesRequest(); // \OpenAPI\Client\Model\PricelistGetPricesRequest

try {
    $result = $apiInstance->getPricesItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPricesItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetPricesRequest**](../Model/PricelistGetPricesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetPricesResponse**](../Model/PricelistGetPricesResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFullPriceItemsByPricelistId()`

```php
listFullPriceItemsByPricelistId($body): \OpenAPI\Client\Model\PricelistListFullPriceItemsResponse
```

List detailed price items for a specific price list

Retrieves a paginated list of detailed price items, including historical data, for a specific price list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistListFullPriceItemsRequest(); // \OpenAPI\Client\Model\PricelistListFullPriceItemsRequest

try {
    $result = $apiInstance->listFullPriceItemsByPricelistId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->listFullPriceItemsByPricelistId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistListFullPriceItemsRequest**](../Model/PricelistListFullPriceItemsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistListFullPriceItemsResponse**](../Model/PricelistListFullPriceItemsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPriceLists()`

```php
listPriceLists($body): \OpenAPI\Client\Model\PricelistListPriceListsResponse
```

List all price lists

Retrieves a list of price lists based on optional filters such as name, code, and other attributes. The response includes details such as code, name, currency, and type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistListPriceListsRequest(); // \OpenAPI\Client\Model\PricelistListPriceListsRequest

try {
    $result = $apiInstance->listPriceLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->listPriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistListPriceListsRequest**](../Model/PricelistListPriceListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistListPriceListsResponse**](../Model/PricelistListPriceListsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPriceItemsByPriceListItemIds()`

```php
priceListGetPriceItemsByPriceListItemIds($body): \OpenAPI\Client\Model\PricelistGetPriceItemsByPriceListItemIdsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistGetPriceItemsByPriceListItemIdsRequest(); // \OpenAPI\Client\Model\PricelistGetPriceItemsByPriceListItemIdsRequest

try {
    $result = $apiInstance->priceListGetPriceItemsByPriceListItemIds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceItemsByPriceListItemIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistGetPriceItemsByPriceListItemIdsRequest**](../Model/PricelistGetPriceItemsByPriceListItemIdsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistGetPriceItemsByPriceListItemIdsResponse**](../Model/PricelistGetPriceItemsByPriceListItemIdsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPriceListItems()`

```php
setPriceListItems($body): \OpenAPI\Client\Model\PricelistSetPriceListItemsResponse
```

Set items in list

Updates or creates items for a given price list, allowing bulk modifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistSetPriceListItemsRequest(); // \OpenAPI\Client\Model\PricelistSetPriceListItemsRequest

try {
    $result = $apiInstance->setPriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->setPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistSetPriceListItemsRequest**](../Model/PricelistSetPriceListItemsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PricelistSetPriceListItemsResponse**](../Model/PricelistSetPriceListItemsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePriceList()`

```php
updatePriceList($body): object
```

Update list

Modifies the attributes of an existing price list based on the provided payload and field mask. The field mask is used to specify which attributes of the price list are to be updated. The field mask is a comma-separated list of fully qualified names of fields. Example: `code,name,currency,type`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PricelistUpdatePriceListRequest(); // \OpenAPI\Client\Model\PricelistUpdatePriceListRequest

try {
    $result = $apiInstance->updatePriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->updatePriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PricelistUpdatePriceListRequest**](../Model/PricelistUpdatePriceListRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
