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
 * Class representing the UpdateProjectRequest model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateProjectRequest
{
  /**
   * The name of the project. minLength: 1 | maxLength: 255.
   */
  #[Assert\Type('string')]
  #[SerializedName('name')]
  protected ?string $name = null;

  /**
   * A description of the project.
   */
  #[Assert\Type('string')]
  #[SerializedName('description')]
  protected ?string $description = null;

  /**
   * Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   */
  #[Assert\Type('string')]
  #[SerializedName('credits')]
  protected ?string $credits = null;

  /**
   * Whether a project is publicly visible (false) or only via direct link (true).
   */
  #[Assert\Type('bool')]
  #[SerializedName('private')]
  protected ?bool $private = null;

  /**
   * An image representing the project in data URI scheme.
   */
  #[Assert\Type('string')]
  #[SerializedName('screenshot')]
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
      $this->private = array_key_exists('private', $data) ? $data['private'] : $this->private;
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
   * @param string|null $name The name of the project. minLength: 1 | maxLength: 255
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
   * @param string|null $description a description of the project
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
   * @param string|null $credits Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   *
   * @return $this
   */
  public function setCredits(?string $credits = null): self
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
  public function setPrivate(?bool $private = null): self
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
  public function setScreenshot(?string $screenshot = null): self
  {
    $this->screenshot = $screenshot;

    return $this;
  }
}
