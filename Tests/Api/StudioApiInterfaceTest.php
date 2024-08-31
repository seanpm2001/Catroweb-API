<?php
/**
 * StudioApiInterfaceTest
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
 * The version of the OpenAPI document: v1.6.0
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
 * StudioApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Api\StudioApiInterface
 *
 * @internal
 */
class StudioApiInterfaceTest extends WebTestCase
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
   * Test case for studioIdDelete.
   *
   * Delete a studio (only available to studio admins).
   */
  public function testStudioIdDelete(): void
  {
    $client = self::$client;

    $path = '/studio/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('DELETE', $path);
    $this->markTestSkipped('Test for studioIdDelete not implemented');
  }

  /**
   * Test case for studioIdGet.
   *
   * Get studio details (private studios are only available to members).
   */
  public function testStudioIdGet(): void
  {
    $client = self::$client;

    $path = '/studio/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for studioIdGet not implemented');
  }

  /**
   * Test case for studioIdPost.
   *
   * Update a Studio (only available to studio admins).
   */
  public function testStudioIdPost(): void
  {
    $client = self::$client;

    $path = '/studio/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('POST', $path);
    $this->markTestSkipped('Test for studioIdPost not implemented');
  }

  /**
   * Test case for studioPost.
   *
   * Create a new Studio.
   */
  public function testStudioPost(): void
  {
    $client = self::$client;

    $path = '/studio';

    $crawler = $client->request('POST', $path);
    $this->markTestSkipped('Test for studioPost not implemented');
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
