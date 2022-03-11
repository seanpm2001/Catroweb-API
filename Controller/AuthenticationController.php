<?php

/**
 * AuthenticationController
 * PHP version 7.1.3.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.72
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use OpenAPI\Server\Api\AuthenticationApiInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AuthenticationController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class AuthenticationController extends Controller
{
  /**
   * Operation authenticationDelete.
   *
   * Expires refresh token
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationDeleteAction(Request $request)
  {
    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables
    $x_refresh = $request->headers->get('X-Refresh');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $x_refresh = $this->deserialize($x_refresh, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($x_refresh, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->authenticationDelete($x_refresh, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'Refresh Token expired | Refresh Token has been used more than once (single use)';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
                case 415:
                    $message = 'Unsupported Media Type - request must use application/json as content type';
                    break;
            }

      return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation authenticationGet.
   *
   * Check token
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationGetAction(Request $request)
  {
    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->authenticationGet($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 401:
                    $message = 'Invalid JWT token | JWT token not found | JWT token expired';
                    break;
            }

      return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation authenticationOauthPost.
   *
   * OAuth Login
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationOauthPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $o_auth_login_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $o_auth_login_request = $this->deserialize($o_auth_login_request, 'OpenAPI\Server\Model\OAuthLoginRequest', $inputFormat);
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\OAuthLoginRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($o_auth_login_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->authenticationOauthPost($o_auth_login_request, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'Invalid Client ID token';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
                case 415:
                    $message = 'Unsupported Media Type - request must use application/json as content type';
                    break;
                case 422:
                    $message = 'Unprocessable Entity';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation authenticationPost.
   *
   * Login
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables
    $login_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $login_request = $this->deserialize($login_request, 'OpenAPI\Server\Model\LoginRequest', $inputFormat);
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\LoginRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($login_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->authenticationPost($login_request, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'Invalid credentials';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
                case 415:
                    $message = 'Unsupported Media Type - request must use application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation authenticationRefreshPost.
   *
   * Refresh token
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationRefreshPostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication
    // Authentication 'PandaAuth' required
    // HTTP basic authentication required
    $securityPandaAuth = $request->headers->get('authorization');

    // Read out all input parameter values into variables
    $refresh_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $refresh_request = $this->deserialize($refresh_request, 'OpenAPI\Server\Model\RefreshRequest', $inputFormat);
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\RefreshRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($refresh_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Set authentication method 'PandaAuth'
      $handler->setPandaAuth($securityPandaAuth);

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->authenticationRefreshPost($refresh_request, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'Refresh Token expired | Refresh Token has been used more than once (single use)';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
                case 415:
                    $message = 'Unsupported Media Type - request must use application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation authenticationUpgradePost.
   *
   * Upgrade a deprecated token to JWT
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function authenticationUpgradePostAction(Request $request)
  {
    // Make sure that the client is providing something that we can consume
    $consumes = ['application/json'];
    if (!static::isContentTypeAllowed($request, $consumes)) {
      // We can't consume the content that the client is sending us
      return new Response('', 415);
    }

    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $upgrade_token_request = $request->getContent();

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $inputFormat = $request->getMimeType($request->getContentType());
      $upgrade_token_request = $this->deserialize($upgrade_token_request, 'OpenAPI\Server\Model\UpgradeTokenRequest', $inputFormat);
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('OpenAPI\\Server\\Model\\UpgradeTokenRequest');
    $asserts[] = new Assert\Valid();
    $response = $this->validate($upgrade_token_request, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];
      $result = $handler->authenticationUpgradePost($upgrade_token_request, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 401:
                    $message = 'The provided deprecated upload token is invalid or has expired';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
                case 415:
                    $message = 'Unsupported Media Type - request must use application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (Exception $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Returns the handler for this API controller.
   *
   * @return AuthenticationApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('authentication');
  }
}
