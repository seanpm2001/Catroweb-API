<?php
/**
 * UtilityApiInterfaceTest
 * PHP version 8.1.1.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * UtilityApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Api\UtilityApiInterface
 *
 * @internal
 */
class UtilityApiInterfaceTest extends WebTestCase
{
  private static ?KernelBrowser $client = null;

  /**
   * Setup before running any test cases.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    if (null === self::$client) {
      self::$client = static::createClient();
    }
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
    static::ensureKernelShutdown();
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * Test case for healthGet.
   *
   * Health Check.
   */
  public function testHealthGet(): void
  {
    $client = self::$client;

    $path = '/health';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for healthGet not implemented');
  }

  /**
   * Test case for surveyLangCodeGet.
   *
   * Get survey link for given language code..
   */
  public function testSurveyLangCodeGet(): void
  {
    $client = self::$client;

    $path = '/survey/{lang_code}';
    $pattern = '{lang_code}';
    $data = $this->genTestData('[a-z0-9]+');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for surveyLangCodeGet not implemented');
  }

  protected function genTestData(string $regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
