<?php
/**
 * AuthenticationApiInterface.
 *
 * PHP version 8.1.1
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
 * The version of the OpenAPI document: v1.3.0
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\LoginRequest;
use OpenAPI\Server\Model\OAuthLoginRequest;
use OpenAPI\Server\Model\RefreshRequest;
use OpenAPI\Server\Model\UpgradeTokenRequest;

/**
 * AuthenticationApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface AuthenticationApiInterface
{
  /**
   * Sets authentication method BearerAuth.
   *
   * @param string|null $value value of the BearerAuth authentication method
   */
  public function setBearerAuth(?string $value): void;

  /**
   * Operation authenticationDelete.
   *
   * Expires refresh token
   *
   * @param string $x_refresh       Refresh Token (required)
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function authenticationDelete(
    string $x_refresh,
    int &$responseCode,
    array &$responseHeaders
  ): void;

  /**
   * Operation authenticationGet.
   *
   * Check token
   *
   * @param int   &$responseCode   The HTTP Response Code
   * @param array $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function authenticationGet(
    int &$responseCode,
    array &$responseHeaders
  ): void;

  /**
   * Operation authenticationOauthPost.
   *
   * OAuth Login
   *
   * @param OAuthLoginRequest $o_auth_login_request (required)
   * @param int               &$responseCode        The HTTP Response Code
   * @param array             $responseHeaders      Additional HTTP headers to return with the response ()
   */
  public function authenticationOauthPost(
    OAuthLoginRequest $o_auth_login_request,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation authenticationPost.
   *
   * Login
   *
   * @param LoginRequest $login_request   (required)
   * @param int          &$responseCode   The HTTP Response Code
   * @param array        $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function authenticationPost(
    LoginRequest $login_request,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation authenticationRefreshPost.
   *
   * Refresh token
   *
   * @param RefreshRequest $refresh_request (required)
   * @param int            &$responseCode   The HTTP Response Code
   * @param array          $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function authenticationRefreshPost(
    RefreshRequest $refresh_request,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;

  /**
   * Operation authenticationUpgradePost.
   *
   * Upgrade a deprecated token to JWT
   *
   * @param UpgradeTokenRequest $upgrade_token_request (required)
   * @param int                 &$responseCode         The HTTP Response Code
   * @param array               $responseHeaders       Additional HTTP headers to return with the response ()
   */
  public function authenticationUpgradePost(
    UpgradeTokenRequest $upgrade_token_request,
    int &$responseCode,
    array &$responseHeaders
  ): array|object|null;
}
