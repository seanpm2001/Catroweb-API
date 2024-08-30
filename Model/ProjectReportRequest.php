<?php
/**
 * ProjectReportRequest.
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
 * The version of the OpenAPI document: v1.6.0
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
 * Class representing the ProjectReportRequest model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectReportRequest
{
  #[Assert\Choice(['Sexual content', 'Graphic violence', 'Hateful or abusive content', 'Improper content rating', 'Illegal prescription or other drug', 'Copycat or impersonation', 'Other objection'])]
  #[Assert\Type('string')]
  #[SerializedName('category')]
  #[Type('string')]
  protected ?string $category = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->category = array_key_exists('category', $data) ? $data['category'] : $this->category;
    }
  }

  /**
   * Gets category.
   */
  public function getCategory(): ?string
  {
    return $this->category;
  }

  /**
   * Sets category.
   *
   * @return $this
   */
  public function setCategory(?string $category = null): self
  {
    $this->category = $category;

    return $this;
  }
}
