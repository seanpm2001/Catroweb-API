<?php
/**
 * RegisterRequest.
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
 * The version of the OpenAPI document: v1.4.3
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
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the RegisterRequest model.
 *
 * @author  OpenAPI Generator team
 */
class RegisterRequest
{
  /**
   * Indicates wether a request should only be verified or executed.
   */
  #[Assert\Type('bool')]
  #[SerializedName('dry-run')]
  protected ?bool $dry_run = false;

  /**
   * Email of the user.
   */
  #[Assert\Type('string')]
  #[SerializedName('email')]
  protected ?string $email = null;

  /**
   * Name of the user | minLength: 3 | maxLength: 180.
   */
  #[Assert\Type('string')]
  #[SerializedName('username')]
  protected ?string $username = null;

  /**
   * A secure password | minLength: 6 | maxLength: 4096.
   */
  #[Assert\Type('string')]
  #[SerializedName('password')]
  protected ?string $password = null;

  /**
   * The profile picture of the user in data URI scheme.
   */
  #[Assert\Type('string')]
  #[SerializedName('picture')]
  protected ?string $picture = null;

  /**
   * An introduction of the user.
   */
  #[Assert\Type('string')]
  #[SerializedName('about')]
  protected ?string $about = null;

  /**
   * A short description about the project the user is currently working on.
   */
  #[Assert\Type('string')]
  #[SerializedName('currentlyWorkingOn')]
  protected ?string $currently_working_on = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->dry_run = array_key_exists('dry_run', $data) ? $data['dry_run'] : $this->dry_run;
      $this->email = array_key_exists('email', $data) ? $data['email'] : $this->email;
      $this->username = array_key_exists('username', $data) ? $data['username'] : $this->username;
      $this->password = array_key_exists('password', $data) ? $data['password'] : $this->password;
      $this->picture = array_key_exists('picture', $data) ? $data['picture'] : $this->picture;
      $this->about = array_key_exists('about', $data) ? $data['about'] : $this->about;
      $this->currently_working_on = array_key_exists('currently_working_on', $data) ? $data['currently_working_on'] : $this->currently_working_on;
    }
  }

  /**
   * Gets dry_run.
   */
  public function isDryRun(): ?bool
  {
    return $this->dry_run;
  }

  /**
   * Sets dry_run.
   *
   * @param bool|null $dry_run Indicates wether a request should only be verified or executed
   *
   * @return $this
   */
  public function setDryRun(?bool $dry_run = null): self
  {
    $this->dry_run = $dry_run;

    return $this;
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
   * @param string|null $email Email of the user
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
   * @param string|null $username Name of the user | minLength: 3 | maxLength: 180
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
   * @param string|null $password A secure password | minLength: 6 | maxLength: 4096
   *
   * @return $this
   */
  public function setPassword(?string $password = null): self
  {
    $this->password = $password;

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
   * @param string|null $picture the profile picture of the user in data URI scheme
   *
   * @return $this
   */
  public function setPicture(?string $picture = null): self
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Gets about.
   */
  public function getAbout(): ?string
  {
    return $this->about;
  }

  /**
   * Sets about.
   *
   * @param string|null $about an introduction of the user
   *
   * @return $this
   */
  public function setAbout(?string $about = null): self
  {
    $this->about = $about;

    return $this;
  }

  /**
   * Gets currently_working_on.
   */
  public function getCurrentlyWorkingOn(): ?string
  {
    return $this->currently_working_on;
  }

  /**
   * Sets currently_working_on.
   *
   * @param string|null $currently_working_on a short description about the project the user is currently working on
   *
   * @return $this
   */
  public function setCurrentlyWorkingOn(?string $currently_working_on = null): self
  {
    $this->currently_working_on = $currently_working_on;

    return $this;
  }
}
