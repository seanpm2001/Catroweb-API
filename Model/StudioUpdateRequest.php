<?php
/**
 * StudioUpdateRequest.
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
 * The version of the OpenAPI document: v1.4.4
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
 * Class representing the StudioUpdateRequest model.
 *
 * @author  OpenAPI Generator team
 */
class StudioUpdateRequest
{
  /**
   * The name of the studio.
   *
   * @SerializedName("name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * A small description about the Studio.
   *
   * @SerializedName("description")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $description = '';

  /**
   * This flag sets the studios&#39; visibility to public or private.
   *
   * @SerializedName("is_public")
   *
   * @Assert\Type("bool")
   *
   * @Type("bool")
   */
  protected ?bool $is_public = true;

  /**
   * This flag enables or disabled the possibility to add comments to the studio.
   *
   * @SerializedName("enable_comments")
   *
   * @Assert\Type("bool")
   *
   * @Type("bool")
   */
  protected ?bool $enable_comments = true;

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
      $this->is_public = array_key_exists('is_public', $data) ? $data['is_public'] : $this->is_public;
      $this->enable_comments = array_key_exists('enable_comments', $data) ? $data['enable_comments'] : $this->enable_comments;
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
   * @param string|null $name The name of the studio
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
   * @param string|null $description A small description about the Studio
   *
   * @return $this
   */
  public function setDescription(?string $description = null): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Gets is_public.
   */
  public function isIsPublic(): ?bool
  {
    return $this->is_public;
  }

  /**
   * Sets is_public.
   *
   * @param bool|null $is_public This flag sets the studios' visibility to public or private
   *
   * @return $this
   */
  public function setIsPublic(?bool $is_public = null): self
  {
    $this->is_public = $is_public;

    return $this;
  }

  /**
   * Gets enable_comments.
   */
  public function isEnableComments(): ?bool
  {
    return $this->enable_comments;
  }

  /**
   * Sets enable_comments.
   *
   * @param bool|null $enable_comments This flag enables or disabled the possibility to add comments to the studio
   *
   * @return $this
   */
  public function setEnableComments(?bool $enable_comments = null): self
  {
    $this->enable_comments = $enable_comments;

    return $this;
  }
}
