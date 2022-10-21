<?php
/**
 * MediaPackageResponse.
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
 * The version of the OpenAPI document: v1.1.16
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
 * Class representing the MediaPackageResponse model.
 *
 * @author  OpenAPI Generator team
 */
class MediaPackageResponse
{
  /**
   * ID of the package.
   *
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $id = null;

  /**
   * Name of the package.
   *
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * Absolute path to the package.
   *
   * @SerializedName("url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $url = null;

  /**
   * @SerializedName("categories")
   * @Assert\All({
   *   @Assert\Type("OpenAPI\Server\Model\MediaCategoryResponse")
   * })
   * @Type("array<OpenAPI\Server\Model\MediaCategoryResponse>")
   */
  protected ?array $categories = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = $data['id'] ?? null;
    $this->name = $data['name'] ?? null;
    $this->url = $data['url'] ?? null;
    $this->categories = $data['categories'] ?? null;
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
   * @param int|null $id ID of the package
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
   * @param string|null $name Name of the package
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets url.
   */
  public function getUrl(): ?string
  {
    return $this->url;
  }

  /**
   * Sets url.
   *
   * @param string|null $url Absolute path to the package
   *
   * @return $this
   */
  public function setUrl(?string $url = null): self
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Gets categories.
   */
  public function getCategories(): ?array
  {
    return $this->categories;
  }

  /**
   * Sets categories.
   *
   * @return $this
   */
  public function setCategories(?array $categories = null): self
  {
    $this->categories = $categories;

    return $this;
  }
}
