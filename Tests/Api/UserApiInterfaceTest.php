<?php
/**
 * UserApiInterfaceTest
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
 * The version of the OpenAPI document: v1.1.16
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
 * UserApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Api\UserApiInterface
 *
 * @internal
 */
class UserApiInterfaceTest extends WebTestCase
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
   * Test case for userDelete.
   *
   * Delete user account.
   */
  public function testUserDelete(): void
  {
    $client = self::$client;

    $path = '/user';

    $crawler = $client->request('DELETE', $path);
    $this->markTestSkipped('Test for userDelete not implemented');
  }

  /**
   * Test case for userGet.
   *
   * Get your private user data.
   */
  public function testUserGet(): void
  {
    $client = self::$client;

    $path = '/user';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for userGet not implemented');
  }

  /**
   * Test case for userIdGet.
   *
   * Get public user data.
   */
  public function testUserIdGet(): void
  {
    $client = self::$client;

    $path = '/user/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for userIdGet not implemented');
  }

  /**
   * Test case for userPost.
   *
   * Register.
   */
  public function testUserPost(): void
  {
    $client = self::$client;

    $path = '/user';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    $this->markTestSkipped('Test for userPost not implemented');
  }

  /**
   * Test case for userPut.
   *
   * Update User.
   */
  public function testUserPut(): void
  {
    $client = self::$client;

    $path = '/user';

    $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    $this->markTestSkipped('Test for userPut not implemented');
  }

  /**
   * Test case for userResetPasswordPost.
   *
   * Request email to reset password.
   */
  public function testUserResetPasswordPost(): void
  {
    $client = self::$client;

    $path = '/user/reset-password';

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    $this->markTestSkipped('Test for userResetPasswordPost not implemented');
  }

  /**
   * Test case for usersSearchGet.
   *
   * Search for users.
   */
  public function testUsersSearchGet(): void
  {
    $client = self::$client;

    $path = '/users/search';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for usersSearchGet not implemented');
  }

  /**
   * @return mixed
   */
  protected function genTestData(string $regexp)
  {
    $grammar = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
    $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
    $ast = $compiler->parse($regexp);
    $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

    return $generator->visit($ast);
  }
}
