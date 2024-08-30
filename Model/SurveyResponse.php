<?php
/**
 * SurveyResponse.
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
 * Class representing the SurveyResponse model.
 *
 * @author  OpenAPI Generator team
 */
class SurveyResponse
{
  /**
   * Url to a survey for the given language.
   */
  #[Assert\Type('string')]
  #[SerializedName('url')]
  #[Type('string')]
  protected ?string $url = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(?array $data = null)
  {
    if (is_array($data)) {
      $this->url = array_key_exists('url', $data) ? $data['url'] : $this->url;
    }
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
   * @param string|null $url Url to a survey for the given language
   *
   * @return $this
   */
  public function setUrl(?string $url = null): self
  {
    $this->url = $url;

    return $this;
  }
}
