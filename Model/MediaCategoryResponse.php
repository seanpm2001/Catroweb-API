<?php
/**
 * MediaCategoryResponse.
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
 * The version of the OpenAPI document: v1.4.0
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
 * Class representing the MediaCategoryResponse model.
 *
 * @author  OpenAPI Generator team
 */
class MediaCategoryResponse
{
  /**
   * ID of the category.
   *
   * @SerializedName("id")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $id = null;

  /**
   * Name of the category.
   *
   * @SerializedName("name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * Shows how important a category is (0 is the least priority).
   *
   * @SerializedName("priority")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   *
   * @Assert\GreaterThanOrEqual(0)
   */
  protected ?int $priority = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->id = array_key_exists('id', $data) ? $data['id'] : $this->id;
      $this->name = array_key_exists('name', $data) ? $data['name'] : $this->name;
      $this->priority = array_key_exists('priority', $data) ? $data['priority'] : $this->priority;
    }
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param int|null $id ID of the category
   *
   * @return $this
   */
  public function setId(?int $id = null): self
  {
    $this->id = $id;

    return $this;
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
   * @param string|null $name Name of the category
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets priority.
   */
  public function getPriority(): ?int
  {
    return $this->priority;
  }

  /**
   * Sets priority.
   *
   * @param int|null $priority Shows how important a category is (0 is the least priority)
   *
   * @return $this
   */
  public function setPriority(?int $priority = null): self
  {
    $this->priority = $priority;

    return $this;
  }
}
