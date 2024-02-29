# GeminiCommerce\Pricelist\PriceListApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**priceListCreatePriceList()**](PriceListApi.md#priceListCreatePriceList) | **POST** /pricelist.PriceList/CreatePriceList |  |
| [**priceListDeletePriceListItems()**](PriceListApi.md#priceListDeletePriceListItems) | **POST** /pricelist.PriceList/DeletePriceListItems |  |
| [**priceListGetFullPriceItemsByPricelistId()**](PriceListApi.md#priceListGetFullPriceItemsByPricelistId) | **POST** /pricelist.PriceList/GetFullPriceItemsByPricelistId |  |
| [**priceListGetPriceItemsByPriceListItemIds()**](PriceListApi.md#priceListGetPriceItemsByPriceListItemIds) | **POST** /pricelist.PriceList/GetPriceItemsByPriceListItemIds |  |
| [**priceListGetPriceList()**](PriceListApi.md#priceListGetPriceList) | **POST** /pricelist.PriceList/GetPriceList |  |
| [**priceListGetPriceListByCode()**](PriceListApi.md#priceListGetPriceListByCode) | **POST** /pricelist.PriceList/GetPriceListByCode |  |
| [**priceListGetPriceListItems()**](PriceListApi.md#priceListGetPriceListItems) | **POST** /pricelist.PriceList/GetPriceListItems |  |
| [**priceListGetPricesItems()**](PriceListApi.md#priceListGetPricesItems) | **POST** /pricelist.PriceList/GetPricesItems |  |
| [**priceListListFullPriceItemsByPricelistId()**](PriceListApi.md#priceListListFullPriceItemsByPricelistId) | **POST** /pricelist.PriceList/ListFullPriceItemsByPricelistId |  |
| [**priceListListPriceLists()**](PriceListApi.md#priceListListPriceLists) | **POST** /pricelist.PriceList/ListPriceLists |  |
| [**priceListSetPriceListItems()**](PriceListApi.md#priceListSetPriceListItems) | **POST** /pricelist.PriceList/SetPriceListItems |  |
| [**priceListUpdatePriceList()**](PriceListApi.md#priceListUpdatePriceList) | **POST** /pricelist.PriceList/UpdatePriceList |  |


## `priceListCreatePriceList()`

```php
priceListCreatePriceList($body): \GeminiCommerce\Pricelist\Model\PricelistCreatePriceListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistCreatePriceListRequest(); // \GeminiCommerce\Pricelist\Model\PricelistCreatePriceListRequest

try {
    $result = $apiInstance->priceListCreatePriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListCreatePriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistCreatePriceListRequest**](../Model/PricelistCreatePriceListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistCreatePriceListResponse**](../Model/PricelistCreatePriceListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListDeletePriceListItems()`

```php
priceListDeletePriceListItems($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistDeletePriceListItemsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistDeletePriceListItemsRequest

try {
    $result = $apiInstance->priceListDeletePriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListDeletePriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistDeletePriceListItemsRequest**](../Model/PricelistDeletePriceListItemsRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetFullPriceItemsByPricelistId()`

```php
priceListGetFullPriceItemsByPricelistId($body): \GeminiCommerce\Pricelist\Model\PricelistGetFullPriceItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetFullPriceItemsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetFullPriceItemsRequest

try {
    $result = $apiInstance->priceListGetFullPriceItemsByPricelistId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetFullPriceItemsByPricelistId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetFullPriceItemsRequest**](../Model/PricelistGetFullPriceItemsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetFullPriceItemsResponse**](../Model/PricelistGetFullPriceItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPriceItemsByPriceListItemIds()`

```php
priceListGetPriceItemsByPriceListItemIds($body): \GeminiCommerce\Pricelist\Model\PricelistGetPriceItemsByPriceListItemIdsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetPriceItemsByPriceListItemIdsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetPriceItemsByPriceListItemIdsRequest

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
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetPriceItemsByPriceListItemIdsRequest**](../Model/PricelistGetPriceItemsByPriceListItemIdsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetPriceItemsByPriceListItemIdsResponse**](../Model/PricelistGetPriceItemsByPriceListItemIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPriceList()`

```php
priceListGetPriceList($body): \GeminiCommerce\Pricelist\Model\PricelistGetPriceListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetPriceListRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetPriceListRequest

try {
    $result = $apiInstance->priceListGetPriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListRequest**](../Model/PricelistGetPriceListRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListResponse**](../Model/PricelistGetPriceListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPriceListByCode()`

```php
priceListGetPriceListByCode($body): \GeminiCommerce\Pricelist\Model\PricelistGetPriceListByCodeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetPriceListByCodeRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetPriceListByCodeRequest

try {
    $result = $apiInstance->priceListGetPriceListByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceListByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListByCodeRequest**](../Model/PricelistGetPriceListByCodeRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListByCodeResponse**](../Model/PricelistGetPriceListByCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPriceListItems()`

```php
priceListGetPriceListItems($body): \GeminiCommerce\Pricelist\Model\PricelistGetPriceListItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetPriceListItemsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetPriceListItemsRequest

try {
    $result = $apiInstance->priceListGetPriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListItemsRequest**](../Model/PricelistGetPriceListItemsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetPriceListItemsResponse**](../Model/PricelistGetPriceListItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListGetPricesItems()`

```php
priceListGetPricesItems($body): \GeminiCommerce\Pricelist\Model\PricelistGetPricesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistGetPricesRequest(); // \GeminiCommerce\Pricelist\Model\PricelistGetPricesRequest

try {
    $result = $apiInstance->priceListGetPricesItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListGetPricesItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistGetPricesRequest**](../Model/PricelistGetPricesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistGetPricesResponse**](../Model/PricelistGetPricesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListListFullPriceItemsByPricelistId()`

```php
priceListListFullPriceItemsByPricelistId($body): \GeminiCommerce\Pricelist\Model\PricelistListFullPriceItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistListFullPriceItemsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistListFullPriceItemsRequest

try {
    $result = $apiInstance->priceListListFullPriceItemsByPricelistId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListListFullPriceItemsByPricelistId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistListFullPriceItemsRequest**](../Model/PricelistListFullPriceItemsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistListFullPriceItemsResponse**](../Model/PricelistListFullPriceItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListListPriceLists()`

```php
priceListListPriceLists($body): \GeminiCommerce\Pricelist\Model\PricelistListPriceListsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistListPriceListsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistListPriceListsRequest

try {
    $result = $apiInstance->priceListListPriceLists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListListPriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistListPriceListsRequest**](../Model/PricelistListPriceListsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistListPriceListsResponse**](../Model/PricelistListPriceListsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListSetPriceListItems()`

```php
priceListSetPriceListItems($body): \GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemsRequest(); // \GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemsRequest

try {
    $result = $apiInstance->priceListSetPriceListItems($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListSetPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemsRequest**](../Model/PricelistSetPriceListItemsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemsResponse**](../Model/PricelistSetPriceListItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceListUpdatePriceList()`

```php
priceListUpdatePriceList($body): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Pricelist\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Pricelist\Model\PricelistUpdatePriceListRequest(); // \GeminiCommerce\Pricelist\Model\PricelistUpdatePriceListRequest

try {
    $result = $apiInstance->priceListUpdatePriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->priceListUpdatePriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Pricelist\Model\PricelistUpdatePriceListRequest**](../Model/PricelistUpdatePriceListRequest.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
