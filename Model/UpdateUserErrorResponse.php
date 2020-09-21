<?php
/**
 * UpdateUserErrorResponse.
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
 * The version of the OpenAPI document: v1.0.44
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
 * Class representing the UpdateUserErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateUserErrorResponse
{
  /**
   * @var string|null
   * @SerializedName("email")
   * @Assert\Choice({ "Email already in use", "Email invalid" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * @var string|null
   * @SerializedName("username")
   * @Assert\Choice({ "Username too short", "Username too long", "Username already in use", "Username must not contain an email address" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $username;

  /**
   * @var string|null
   * @SerializedName("password")
   * @Assert\Choice({ "Password too short", "Password too long", "Password contains invalid chars" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $password;

  /**
   * @var string|null
   * @SerializedName("country")
   * @Assert\Choice({ "Country invalid" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $country;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->email = isset($data['email']) ? $data['email'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->password = isset($data['password']) ? $data['password'] : null;
    $this->country = isset($data['country']) ? $data['country'] : null;
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
  public function setEmail(string $email = null)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @return $this
   */
  public function setPassword(string $password = null)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Gets country.
   */
  public function getCountry(): ?string
  {
    return $this->country;
  }

  /**
   * Sets country.
   *
   * @return $this
   */
  public function setCountry(string $country = null)
  {
    $this->country = $country;

    return $this;
  }
}
