# Pins

```php
$pinsController = $client->getPinsController();
```

## Class Name

`PinsController`


# Create Pin

Create a new pin in Pinterest board.

```php
function createPin(NewPinRequest $body): CreatePinResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`NewPinRequest`](../../doc/models/new-pin-request.md) | Body, Required | - |

## Response Type

[`CreatePinResponse`](../../doc/models/create-pin-response.md)

## Example Usage

```php
$body = NewPinRequestBuilder::init(
    'string',
    MediaSourceFileBuilder::init(
        'some public url'
    )->build()
)
    ->link('https://www.pinterest.com/')
    ->title('string')
    ->description('string')
    ->dominantColor('#6E7874')
    ->altText('string')
    ->boardSectionId('string')
    ->parentPinId('string')
    ->build();

$result = $pinsController->createPin($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid pin parameters | `ApiException` |
| 403 | The pin's image is too small, too large, or is broken | `ApiException` |
| 404 | Board or section not found | `ApiException` |
| 429 | This request exceeded a rate limit. This can happen if a client exceeds one of the published rate limits or if multiple write operations are applied to an object within a short time window. | `ApiException` |

