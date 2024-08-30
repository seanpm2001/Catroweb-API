<?php
/**
 * UpdateProjectErrorResponse.
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
 * The version of the OpenAPI document: v1.5.5
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
 * Class representing the UpdateProjectErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateProjectErrorResponse
{
  /**
   * @SerializedName("name")
   *
   * @Assert\Choice({ "Name empty", "Name too long" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * @SerializedName("description")
   *
   * @Assert\Choice({ "Description too long" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $description = null;

  /**
   * @SerializedName("credits")
   *
   * @Assert\Choice({ "Credits too long" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $credits = null;

  /**
   * @SerializedName("screenshot")
   *
   * @Assert\Choice({ "Project screenshot invalid or not supported" })
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $screenshot = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->name = array_key_exists('name', $data) ? $data['name'] : $this->name;
      $this->description = array_key_exists('description', $data) ? $data['description'] : $this->description;
      $this->credits = array_key_exists('credits', $data) ? $data['credits'] : $this->credits;
      $this->screenshot = array_key_exists('screenshot', $data) ? $data['screenshot'] : $this->screenshot;
    }
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets description.
   */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /**
   * Sets description.
   *
   * @return $this
   */
  public function setDescription(?string $description = null): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Gets credits.
   */
  public function getCredits(): ?string
  {
    return $this->credits;
  }

  /**
   * Sets credits.
   *
   * @return $this
   */
  public function setCredits(?string $credits = null): self
  {
    $this->credits = $credits;

    return $this;
  }

  /**
   * Gets screenshot.
   */
  public function getScreenshot(): ?string
  {
    return $this->screenshot;
  }

  /**
   * Sets screenshot.
   *
   * @return $this
   */
  public function setScreenshot(?string $screenshot = null): self
  {
    $this->screenshot = $screenshot;

    return $this;
  }
}
