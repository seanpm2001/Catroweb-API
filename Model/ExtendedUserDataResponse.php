<?php
/**
 * ExtendedUserDataResponse.
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
 * The version of the OpenAPI document: v1.0.72
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
 * Class representing the ExtendedUserDataResponse model.
 *
 * @author  OpenAPI Generator team
 */
class ExtendedUserDataResponse
{
  /**
   * Unique ID of the user.
   *
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * Nickname of the user.
   *
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $username;

  /**
   * Amount of projects of the user.
   *
   * @var int|null
   * @SerializedName("projects")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $projects;

  /**
   * Amount of users that follow this user.
   *
   * @var int|null
   * @SerializedName("followers")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $followers;

  /**
   * Amount of users followed by this user.
   *
   * @var int|null
   * @SerializedName("following")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $following;

  /**
   * EMail of the user.
   *
   * @var string|null
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->projects = isset($data['projects']) ? $data['projects'] : null;
    $this->followers = isset($data['followers']) ? $data['followers'] : null;
    $this->following = isset($data['following']) ? $data['following'] : null;
    $this->email = isset($data['email']) ? $data['email'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param string|null $id Unique ID of the user
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

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
   * @param string|null $username Nickname of the user
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets projects.
   */
  public function getProjects(): ?int
  {
    return $this->projects;
  }

  /**
   * Sets projects.
   *
   * @param int|null $projects Amount of projects of the user
   *
   * @return $this
   */
  public function setProjects(int $projects = null)
  {
    $this->projects = $projects;

    return $this;
  }

  /**
   * Gets followers.
   */
  public function getFollowers(): ?int
  {
    return $this->followers;
  }

  /**
   * Sets followers.
   *
   * @param int|null $followers Amount of users that follow this user
   *
   * @return $this
   */
  public function setFollowers(int $followers = null)
  {
    $this->followers = $followers;

    return $this;
  }

  /**
   * Gets following.
   */
  public function getFollowing(): ?int
  {
    return $this->following;
  }

  /**
   * Sets following.
   *
   * @param int|null $following Amount of users followed by this user
   *
   * @return $this
   */
  public function setFollowing(int $following = null)
  {
    $this->following = $following;

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
   * @param string|null $email EMail of the user
   *
   * @return $this
   */
  public function setEmail(string $email = null)
  {
    $this->email = $email;

    return $this;
  }
}
