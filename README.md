
# Getting Started with Pinterest API

## Building

The generated code has dependencies over external libraries like UniRest and JsonMapper. JsonMapper requires docblock annotations like `@var`, `@maps`, and `@factory` to map JSON responses with our class definitions. Hence the docblocks in generated code cannot be disabled by deactivating the PHP configurations like `opcache.save_comments`. These dependencies are defined in the `composer.json` file that comes with the SDK. To resolve these dependencies, we use the Composer package manager which requires PHP greater than or equal to 7.2 installed in your system. Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. Open command prompt and type `composer --version`. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including `composer.json`) for the SDK.
* Run the command `composer install`. This should install all the required dependencies and create the `vendor` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=installDependencies)

### Configuring CURL Certificate Path in php.ini

:information_source: **Note** This is for Windows users only.

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```
[curl]; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
curl.cainfo = PATH_TO/cacert.pem
```

## Installation

The following section explains how to use the PinterestAPILib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=openIDE)

Click on `Open` in PhpStorm to browse to your generated SDK directory and then click `OK`.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=openProject0)

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=createDirectory)

Name the directory as "test".

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=nameDirectory)

Add a PHP file to this project.

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=createFile)

Name it "testSDK".

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=nameFile)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```php
require_once "vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file `autoload.php` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 5](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=projectFiles)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and use the Controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open `Settings` from `File` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=openSettings)

Select `PHP` from within `Languages & Frameworks`.

![Run Test Project - Step 2](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=setInterpreter0)

Browse for Interpreters near the `Interpreter` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=setInterpreter1)

Once the interpreter is selected, click `OK`.

![Run Test Project - Step 4](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=setInterpreter2)

To run your project, right click on your PHP file inside your Test project and click on `Run`.

![Run Test Project - Step 5](https://apidocs.io/illustration/php?workspaceFolder=PinterestAPI&step=runProject)

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `oAuthClientId` | `string` | OAuth 2 Client ID |
| `oAuthClientSecret` | `string` | OAuth 2 Client Secret |
| `oAuthRedirectUri` | `string` | OAuth 2 Redirection endpoint or Callback Uri |
| `oAuthToken` | `OAuthToken` | Object for storing information about the OAuth token |
| `oAuthScopes` | `string(OAuthScopeEnum)[]` |  |

The API client can be initialized as follows:

```php
$client = PinterestAPIClientBuilder::init()
    ->oAuthClientId('OAuthClientId')
    ->oAuthClientSecret('OAuthClientSecret')
    ->oAuthRedirectUri('OAuthRedirectUri')
    ->oAuthScopes([
        PinterestAPILib\Models\OAuthScopeEnum::BOARDREADACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::PINSREADACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::BOARDSWRITEACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::PINSWRITEACCESS
    ])
    ->environment('production')
    ->build();
```

## Authorization

This API uses `OAuth 2 Authorization Code Grant`.

## Authorization Code Grant

Your application must obtain user authorization before it can execute an endpoint call incase this SDK chooses to use *OAuth 2.0 Authorization Code Grant*. This authorization includes the following steps

### 1\. Obtain user consent

To obtain user's consent, you must redirect the user to the authorization page.The `buildAuthorizationUrl()` method creates the URL to the authorization page. You must have initialized the client with scopes for which you need permission to access.

```php
$authUrl = $client->getAuthorizationCodeAuth()->buildAuthorizationUrl();
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
```

### 2\. Handle the OAuth server response

Once the user responds to the consent request, the OAuth 2.0 server responds to your application's access request by redirecting the user to the redirect URI specified set in `Configuration`.

If the user approves the request, the authorization code will be sent as the `code` query string:

```
https://example.com/oauth/callback?code=XXXXXXXXXXXXXXXXXXXXXXXXX
```

If the user does not approve the request, the response contains an `error` query string:

```
https://example.com/oauth/callback?error=access_denied
```

### 3\. Authorize the client using the code

After the server receives the code, it can exchange this for an *access token*. The access token is an object containing information for authorizing client requests and refreshing the token itself.

```php
try {
    $token = $client->getAuthorizationCodeAuth()->fetchToken($_GET['code']);
    // re-build the client with oauth token
    $client = $client->toBuilder()->oauthToken($token)->build();
} catch (PinterestAPILib\Exceptions\ApiException $e) {
    // handle exception
}
```

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `OAuthScopeEnum` enumeration.

| Scope Name | Description |
|  --- | --- |
| `BOARDREADACCESS` | For reading board |
| `PINSREADACCESS` | For reading pins |
| `BOARDSWRITEACCESS` |  |
| `PINSWRITEACCESS` |  |

### Refreshing the token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```php
if ($client->getAuthorizationCodeAuth()->isTokenExpired()) {
    try {
        $token = $client->getAuthorizationCodeAuth()->refreshToken();
        // re-build the client with oauth token
        $client = $client->toBuilder()->oauthToken($token)->build();
    } catch (PinterestAPILib\Exceptions\ApiException $e) {
        // handle exception
    }
}
```

If a token expires, an exception will be thrown before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

```php
// store token
$_SESSION['access_token'] = $client->getAuthorizationCodeAuth()->getOAuthToken();
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in Configuration along with the other configuration parameters before creating the client:

```php
// load token later...
$token = $_SESSION['access_token'];

// re-build the client with oauth token
$client = $client->toBuilder()->oauthToken($token)->build();
```

### Complete example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

$client = PinterestAPIClientBuilder::init()
    ->oAuthClientId('OAuthClientId')
    ->oAuthClientSecret('OAuthClientSecret')
    ->oAuthRedirectUri('OAuthRedirectUri')
    ->oAuthScopes([
        PinterestAPILib\Models\OAuthScopeEnum::BOARDREADACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::PINSREADACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::BOARDSWRITEACCESS,
        PinterestAPILib\Models\OAuthScopeEnum::PINSWRITEACCESS
    ])
    ->environment('production')
    ->build();


// Obtain access token, restore from cache if possible
if (isset($_SESSION['access_token'])) {
    $token = $_SESSION['access_token'];
    // re-build the client with oauth token
    $client = $client->toBuilder()->oauthToken($token)->build();
} else {
    try {
        // build authorization url to redirect the user
        $oAuthRedirectUri = $client->getAuthorizationCodeAuth()->buildAuthorizationUrl();
        // redirect the user to $oAuthRedirectUri and get a code after the user consent
        header('Location: ' . filter_var($oAuthRedirectUri, FILTER_SANITIZE_URL));

        // fetch an oauth token to authorize the client using the stored code
        $token = $client->getAuthorizationCodeAuth()->fetchToken($_GET['code']);
        // re-build the client with oauth token
        $client = $client->toBuilder()->oauthToken($token)->build();

        // store token
        $_SESSION['access_token'] = $token;
    } catch (PinterestAPILib\Exceptions\ApiException $e) {
        // handle exception
    }
}

// check if token gets expired, then try to refresh the token
if ($client->getAuthorizationCodeAuth()->isTokenExpired()) {
    try {
        // refresh the token
        $token = $client->getAuthorizationCodeAuth()->refreshToken();
        // re-build the client with oauth token
        $client = $client->toBuilder()->oauthToken($token)->build();

        // update the cached token
        $_SESSION['access_token'] = $token;
    } catch (PinterestAPILib\Exceptions\ApiException $e) {
        // handle exception
    }
}

// the client is now authorized; you can use $client to make endpoint calls
```

## List of APIs

* [O Auth Authorization](doc/controllers/o-auth-authorization.md)
* [Pins](doc/controllers/pins.md)
* [Boards](doc/controllers/boards.md)

## Classes Documentation

* [ApiException](doc/api-exception.md)
* [HttpRequest](doc/http-request.md)
* [HttpResponse](doc/http-response.md)

