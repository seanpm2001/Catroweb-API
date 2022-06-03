<?php
/**
 * UpdateProjectRequest.
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
 * The version of the OpenAPI document: v1.1.6
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
 * Class representing the UpdateProjectRequest model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateProjectRequest
{
  /**
   * The name of the project. minLength: 1 | maxLength: 255.
   *
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $name;

  /**
   * A description of the project.
   *
   * @SerializedName("description")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $description;

  /**
   * Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   *
   * @SerializedName("credits")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $credits;

  /**
   * Whether a project is publicly visible (false) or only via direct link (true).
   *
   * @SerializedName("private")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected ?bool $private;

  /**
   * An image representing the project in data URI scheme.
   *
   * @SerializedName("screenshot")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $screenshot;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->name = $data['name'] ?? null;
    $this->description = $data['description'] ?? null;
    $this->credits = $data['credits'] ?? null;
    $this->private = $data['private'] ?? null;
    $this->screenshot = $data['screenshot'] ?? null;
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
   * @param string|null $name The name of the project. minLength: 1 | maxLength: 255
   *
   * @return $this
   */
  public function setName(string $name = null): self
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
   * @param string|null $description a description of the project
   *
   * @return $this
   */
  public function setDescription(string $description = null): self
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
   * @param string|null $credits Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   *
   * @return $this
   */
  public function setCredits(string $credits = null): self
  {
    $this->credits = $credits;

    return $this;
  }

  /**
   * Gets private.
   */
  public function isPrivate(): ?bool
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @param bool|null $private whether a project is publicly visible (false) or only via direct link (true)
   *
   * @return $this
   */
  public function setPrivate(bool $private = null): self
  {
    $this->private = $private;

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
   * @param string|null $screenshot an image representing the project in data URI scheme
   *
   * @return $this
   */
  public function setScreenshot(string $screenshot = null): self
  {
    $this->screenshot = $screenshot;

    return $this;
  }
}
