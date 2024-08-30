<?php
/**
 * UpdateUserErrorResponse.
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
 * The version of the OpenAPI document: v1.5.7
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
   * @SerializedName("email")
   *
   * @Assert\Choice({ "Email already in use", "Email invalid" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $email = null;

  /**
   * @SerializedName("username")
   *
   * @Assert\Choice({ "Username too short", "Username too long", "Username already in use", "Username must not contain an email address" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $username = null;

  /**
   * @SerializedName("password")
   *
   * @Assert\Choice({ "Password too short", "Password too long", "Password contains invalid chars" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $password = null;

  /**
   * @SerializedName("currentPassword")
   *
   * @Assert\Choice({ "Current password is missing", "Current password is wrong" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $current_password = null;

  /**
   * @SerializedName("picture")
   *
   * @Assert\Choice({ "Profile picture invalid or not supported" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $picture = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->email = array_key_exists('email', $data) ? $data['email'] : $this->email;
      $this->username = array_key_exists('username', $data) ? $data['username'] : $this->username;
      $this->password = array_key_exists('password', $data) ? $data['password'] : $this->password;
      $this->current_password = array_key_exists('current_password', $data) ? $data['current_password'] : $this->current_password;
      $this->picture = array_key_exists('picture', $data) ? $data['picture'] : $this->picture;
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
  public function setUsername(?string $username = null): self
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
  public function setPassword(?string $password = null): self
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Gets current_password.
   */
  public function getCurrentPassword(): ?string
  {
    return $this->current_password;
  }

  /**
   * Sets current_password.
   *
   * @return $this
   */
  public function setCurrentPassword(?string $current_password = null): self
  {
    $this->current_password = $current_password;

    return $this;
  }

  /**
   * Gets picture.
   */
  public function getPicture(): ?string
  {
    return $this->picture;
  }

  /**
   * Sets picture.
   *
   * @return $this
   */
  public function setPicture(?string $picture = null): self
  {
    $this->picture = $picture;

    return $this;
  }
}
