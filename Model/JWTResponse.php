<?php
/**
 * JWTResponse.
 *
 * PHP version 7.1.3
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
 * The version of the OpenAPI document: v1.0.70
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the JWTResponse model.
 *
 * @author  OpenAPI Generator team
 */
class JWTResponse
{
  /**
   * @var string|null
   * @SerializedName("token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $token;

  /**
   * @var string|null
   * @SerializedName("refresh_token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $refresh_token;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->token = isset($data['token']) ? $data['token'] : null;
    $this->refresh_token = isset($data['refresh_token']) ? $data['refresh_token'] : null;
  }

  /**
   * Gets token.
   */
  public function getToken(): ?string
  {
    return $this->token;
  }

  /**
   * Sets token.
   *
   * @return $this
   */
  public function setToken(string $token = null)
  {
    $this->token = $token;

    return $this;
  }

  /**
   * Gets refresh_token.
   */
  public function getRefreshToken(): ?string
  {
    return $this->refresh_token;
  }

  /**
   * Sets refresh_token.
   *
   * @return $this
   */
  public function setRefreshToken(string $refresh_token = null)
  {
    $this->refresh_token = $refresh_token;

    return $this;
  }
}
