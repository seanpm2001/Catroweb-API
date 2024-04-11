<?php
/**
 * ResetPasswordErrorResponse.
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

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the ResetPasswordErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class ResetPasswordErrorResponse
{
  /**
   * @SerializedName("email")
   *
   * @Assert\Choice({ "Email invalid", "Email missing" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $email = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->email = array_key_exists('email', $data) ? $data['email'] : $this->email;
    }
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @return $this
   */
  public function setEmail(?string $email = null): self
  {
    $this->email = $email;

    return $this;
  }
}
