<?php
/**
 * ShippingQuoteApi
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Logistics API
 *
 * The <b>Logistics API</b> resources offer the following capabilities: <ul><li><b>shipping_quote</b> &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package.</li> <li><b>shipment</b> &ndash; Creates a \"shipment\" for the selected shipping rate.</li></ul> Call <b>createShippingQuote</b> to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. <br><br>Select one of the live rates and using its associated <b>rateId</b>, create a \"shipment\" for the package by calling <b>createFromShippingQuote</b>. Creating a shipment completes an agreement, and the base service and addition shipping options are totaled into the <b>totalShippingCost</b>. This action also generates a shipping label that you can use to ship the package.<p class=\"tablenote\"><b>Important!</b> Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.</p>
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Logistics\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use eBay\Sell\Logistics\ApiException;
use eBay\Sell\Logistics\Configuration;
use eBay\Sell\Logistics\HeaderSelector;
use eBay\Sell\Logistics\ObjectSerializer;

/**
 * ShippingQuoteApi Class Doc Comment
 *
 * @category Class
 * @package  eBay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingQuoteApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createShippingQuote
     *
     * @param  \eBay\Sell\Logistics\Model\ShippingQuoteRequest $shipping_quote_request The request object for createShippingQuote. (required)
     *
     * @throws \eBay\Sell\Logistics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eBay\Sell\Logistics\Model\ShippingQuote|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400
     */
    public function createShippingQuote($shipping_quote_request)
    {
        list($response) = $this->createShippingQuoteWithHttpInfo($shipping_quote_request);
        return $response;
    }

    /**
     * Operation createShippingQuoteWithHttpInfo
     *
     * @param  \eBay\Sell\Logistics\Model\ShippingQuoteRequest $shipping_quote_request The request object for createShippingQuote. (required)
     *
     * @throws \eBay\Sell\Logistics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eBay\Sell\Logistics\Model\ShippingQuote|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400, HTTP status code, HTTP response headers (array of strings)
     */
    public function createShippingQuoteWithHttpInfo($shipping_quote_request)
    {
        $request = $this->createShippingQuoteRequest($shipping_quote_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\eBay\Sell\Logistics\Model\ShippingQuote' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\ShippingQuote', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\eBay\Sell\Logistics\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\eBay\Sell\Logistics\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\eBay\Sell\Logistics\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eBay\Sell\Logistics\Model\ShippingQuote';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\ShippingQuote',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createShippingQuoteAsync
     *
     * 
     *
     * @param  \eBay\Sell\Logistics\Model\ShippingQuoteRequest $shipping_quote_request The request object for createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createShippingQuoteAsync($shipping_quote_request)
    {
        return $this->createShippingQuoteAsyncWithHttpInfo($shipping_quote_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createShippingQuoteAsyncWithHttpInfo
     *
     * 
     *
     * @param  \eBay\Sell\Logistics\Model\ShippingQuoteRequest $shipping_quote_request The request object for createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createShippingQuoteAsyncWithHttpInfo($shipping_quote_request)
    {
        $returnType = '\eBay\Sell\Logistics\Model\ShippingQuote';
        $request = $this->createShippingQuoteRequest($shipping_quote_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createShippingQuote'
     *
     * @param  \eBay\Sell\Logistics\Model\ShippingQuoteRequest $shipping_quote_request The request object for createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createShippingQuoteRequest($shipping_quote_request)
    {
        // verify the required parameter 'shipping_quote_request' is set
        if ($shipping_quote_request === null || (is_array($shipping_quote_request) && count($shipping_quote_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipping_quote_request when calling createShippingQuote'
            );
        }

        $resourcePath = '/shipping_quote';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($shipping_quote_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($shipping_quote_request));
            } else {
                $httpBody = $shipping_quote_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getShippingQuote
     *
     * @param  string $shipping_quote_id This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. (required)
     *
     * @throws \eBay\Sell\Logistics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \eBay\Sell\Logistics\Model\ShippingQuote|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400
     */
    public function getShippingQuote($shipping_quote_id)
    {
        list($response) = $this->getShippingQuoteWithHttpInfo($shipping_quote_id);
        return $response;
    }

    /**
     * Operation getShippingQuoteWithHttpInfo
     *
     * @param  string $shipping_quote_id This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. (required)
     *
     * @throws \eBay\Sell\Logistics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \eBay\Sell\Logistics\Model\ShippingQuote|\eBay\Sell\Logistics\Model\InlineResponse400|\eBay\Sell\Logistics\Model\InlineResponse400, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShippingQuoteWithHttpInfo($shipping_quote_id)
    {
        $request = $this->getShippingQuoteRequest($shipping_quote_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\eBay\Sell\Logistics\Model\ShippingQuote' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\ShippingQuote', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\eBay\Sell\Logistics\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\eBay\Sell\Logistics\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\eBay\Sell\Logistics\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\eBay\Sell\Logistics\Model\ShippingQuote';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\ShippingQuote',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\eBay\Sell\Logistics\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getShippingQuoteAsync
     *
     * 
     *
     * @param  string $shipping_quote_id This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingQuoteAsync($shipping_quote_id)
    {
        return $this->getShippingQuoteAsyncWithHttpInfo($shipping_quote_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShippingQuoteAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $shipping_quote_id This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingQuoteAsyncWithHttpInfo($shipping_quote_id)
    {
        $returnType = '\eBay\Sell\Logistics\Model\ShippingQuote';
        $request = $this->getShippingQuoteRequest($shipping_quote_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getShippingQuote'
     *
     * @param  string $shipping_quote_id This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getShippingQuoteRequest($shipping_quote_id)
    {
        // verify the required parameter 'shipping_quote_id' is set
        if ($shipping_quote_id === null || (is_array($shipping_quote_id) && count($shipping_quote_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shipping_quote_id when calling getShippingQuote'
            );
        }

        $resourcePath = '/shipping_quote/{shippingQuoteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($shipping_quote_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shippingQuoteId' . '}',
                ObjectSerializer::toPathValue($shipping_quote_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
