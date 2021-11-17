<?php
/**
 * SearchApiInterface
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
 * The version of the OpenAPI document: v1.0.63
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

/**
 * SearchApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface SearchApiInterface
{
  /**
   * Operation searchGet.
   *
   * Search for projects, users,..  -- StatusCode: 501 - Not yet implemented
   *
   * @param \string $query           (required)
   * @param \string $type            (optional)
   * @param \int    $limit           (optional, default to 20)
   * @param \int    $offset          (optional, default to 0)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\SearchResponse
   */
  public function searchGet(string $query, string $type = null, int $limit = 20, int $offset = 0, &$responseCode, array &$responseHeaders);
}
