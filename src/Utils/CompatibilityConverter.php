<?php

declare(strict_types=1);

/*
 * PinterestAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PinterestAPILib\Utils;

use CoreInterfaces\Core\ContextInterface;
use CoreInterfaces\Core\Request\RequestInterface;
use CoreInterfaces\Core\Response\ResponseInterface;
use CoreInterfaces\Sdk\ConverterInterface;
use PinterestAPILib\Exceptions\ApiException;
use PinterestAPILib\Http\HttpContext;
use PinterestAPILib\Http\HttpRequest;
use PinterestAPILib\Http\HttpResponse;

class CompatibilityConverter implements ConverterInterface
{
    public function createApiException(
        string $message,
        RequestInterface $request,
        ?ResponseInterface $response
    ): ApiException {
        $response = $response == null ? null : $this->createHttpResponse($response);
        return new ApiException($message, $this->createHttpRequest($request), $response);
    }

    public function createHttpContext(ContextInterface $context): HttpContext
    {
        return new HttpContext(
            $this->createHttpRequest($context->getRequest()),
            $this->createHttpResponse($context->getResponse())
        );
    }

    public function createHttpRequest(RequestInterface $request): HttpRequest
    {
        return new HttpRequest(
            $request->getHttpMethod(),
            $request->getHeaders(),
            $request->getQueryUrl(),
            $request->getParameters()
        );
    }

    public function createHttpResponse(ResponseInterface $response): HttpResponse
    {
        return new HttpResponse($response->getStatusCode(), $response->getHeaders(), $response->getRawBody());
    }

    public function createApiResponse(ContextInterface $context, $deserializedBody)
    {
        return null;
    }

    public function createFileWrapper(string $realFilePath, ?string $mimeType, ?string $filename)
    {
        return null;
    }
}
