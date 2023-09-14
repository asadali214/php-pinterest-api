# O Auth Authorization

```php
$oAuthAuthorizationController = $client->getOAuthAuthorizationController();
```

## Class Name

`OAuthAuthorizationController`

## Methods

* [Request Token](../../doc/controllers/o-auth-authorization.md#request-token)
* [Refresh Token](../../doc/controllers/o-auth-authorization.md#refresh-token)


# Request Token

Create a new OAuth 2 token.

:information_source: **Note** This endpoint does not require authentication.

```php
function requestToken(
    string $authorization,
    string $code,
    string $redirectUri,
    array $fieldParameters = null
): OAuthToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | Authorization header in Basic auth format |
| `code` | `string` | Form, Required | Authorization Code |
| `redirectUri` | `string` | Form, Required | Redirect Uri |
| `fieldParameters` | `?array` | Optional | Pass additional field parameters. |

## Response Type

[`OAuthToken`](../../doc/models/o-auth-token.md)

## Example Usage

```php
$authorization = 'Authorization8';

$code = 'code8';

$redirectUri = 'redirect_uri8';

$additionalFieldParams = [
    'key0' => ApiHelper::deserialize('"additionalFieldParams9"')
];

$result = $oAuthAuthorizationController->requestToken(
    $authorization,
    $code,
    $redirectUri,
    $additionalFieldParams
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | OAuth 2 provider returned an error. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |
| 401 | OAuth 2 provider says client authentication failed. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |


# Refresh Token

Obtain a new access token using a refresh token

:information_source: **Note** This endpoint does not require authentication.

```php
function refreshToken(
    string $authorization,
    string $refreshToken,
    ?string $scope = null,
    array $fieldParameters = null
): OAuthToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | Authorization header in Basic auth format |
| `refreshToken` | `string` | Form, Required | Refresh token |
| `scope` | `?string` | Form, Optional | Requested scopes as a space-delimited list. |
| `fieldParameters` | `?array` | Optional | Pass additional field parameters. |

## Response Type

[`OAuthToken`](../../doc/models/o-auth-token.md)

## Example Usage

```php
$authorization = 'Authorization8';

$refreshToken = 'refresh_token0';

$additionalFieldParams = [
    'key0' => ApiHelper::deserialize('"additionalFieldParams9"')
];

$result = $oAuthAuthorizationController->refreshToken(
    $authorization,
    $refreshToken,
    null,
    $additionalFieldParams
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | OAuth 2 provider returned an error. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |
| 401 | OAuth 2 provider says client authentication failed. | [`OAuthProviderException`](../../doc/models/o-auth-provider-exception.md) |

