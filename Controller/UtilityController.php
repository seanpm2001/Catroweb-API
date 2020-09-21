<?php

/**
 * UtilityController
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
 * The version of the OpenAPI document: v1.0.44
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
use OpenAPI\Server\Api\UtilityApiInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * UtilityController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class UtilityController extends Controller
{
  /**
   * Operation healthGet.
   *
   * Health Check
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function healthGetAction(Request $request)
  {
    // Handle authentication

    // Read out all input parameter values into variables

    // Use the default value if no value was provided

    // Validate the input values

    try
    {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 204;
      $responseHeaders = [];
      $result = $handler->healthGet($responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 204:
                    $message = 'System is alive and healthy!';
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
    }
    catch (Exception $fallthrough)
    {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Returns the handler for this API controller.
   *
   * @return UtilityApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('utility');
  }
}
