<?php
/**
 * OAuthLoginRequest.
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
 * The version of the OpenAPI document: v1.6.0
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
 * Class representing the OAuthLoginRequest model.
 *
 * @author  OpenAPI Generator team
 */
class OAuthLoginRequest
{
  /**
   * User ID token.
   */
  #[SerializedName('id_token')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $id_token = null;

  /**
   * OAuth provider.
   */
  #[SerializedName('resource_owner')]
  #[Assert\Type('string')]
  #[Type('string')]
  protected ?string $resource_owner = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->id_token = array_key_exists('id_token', $data) ? $data['id_token'] : $this->id_token;
      $this->resource_owner = array_key_exists('resource_owner', $data) ? $data['resource_owner'] : $this->resource_owner;
    }
  }

  /**
   * Gets id_token.
   */
  public function getIdToken(): ?string
  {
    return $this->id_token;
  }

  /**
   * Sets id_token.
   *
   * @param string|null $id_token User ID token
   *
   * @return $this
   */
  public function setIdToken(?string $id_token = null): self
  {
    $this->id_token = $id_token;

    return $this;
  }

  /**
   * Gets resource_owner.
   */
  public function getResourceOwner(): ?string
  {
    return $this->resource_owner;
  }

  /**
   * Sets resource_owner.
   *
   * @param string|null $resource_owner OAuth provider
   *
   * @return $this
   */
  public function setResourceOwner(?string $resource_owner = null): self
  {
    $this->resource_owner = $resource_owner;

    return $this;
  }
}
