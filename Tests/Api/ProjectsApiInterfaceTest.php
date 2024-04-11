<?php
/**
 * ProjectsApiInterfaceTest
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
 * The version of the OpenAPI document: v1.4.0
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
 * ProjectsApiInterfaceTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Api\ProjectsApiInterface
 *
 * @internal
 */
class ProjectsApiInterfaceTest extends WebTestCase
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
   * Test case for projectIdCatrobatGet.
   *
   * Download the .catrobat (=zip) file of a project.
   */
  public function testProjectIdCatrobatGet(): void
  {
    $client = self::$client;

    $path = '/project/{id}/catrobat';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectIdCatrobatGet not implemented');
  }

  /**
   * Test case for projectIdDelete.
   *
   * Delete a project.
   */
  public function testProjectIdDelete(): void
  {
    $client = self::$client;

    $path = '/project/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('DELETE', $path);
    $this->markTestSkipped('Test for projectIdDelete not implemented');
  }

  /**
   * Test case for projectIdGet.
   *
   * Get the information of a project.
   */
  public function testProjectIdGet(): void
  {
    $client = self::$client;

    $path = '/project/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectIdGet not implemented');
  }

  /**
   * Test case for projectIdPut.
   *
   * Update details of a project.
   */
  public function testProjectIdPut(): void
  {
    $client = self::$client;

    $path = '/project/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    $this->markTestSkipped('Test for projectIdPut not implemented');
  }

  /**
   * Test case for projectIdRecommendationsGet.
   *
   * Get recommended projects related to the specific project.
   */
  public function testProjectIdRecommendationsGet(): void
  {
    $client = self::$client;

    $path = '/project/{id}/recommendations';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectIdRecommendationsGet not implemented');
  }

  /**
   * Test case for projectIdReportPost.
   *
   * Report a project -- StatusCode: 501 - Not yet implemented.
   */
  public function testProjectIdReportPost(): void
  {
    $client = self::$client;

    $path = '/project/{id}/report';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    $this->markTestSkipped('Test for projectIdReportPost not implemented');
  }

  /**
   * Test case for projectsCategoriesGet.
   *
   * Get default number of projects per category (Most downloaded etc.).
   */
  public function testProjectsCategoriesGet(): void
  {
    $client = self::$client;

    $path = '/projects/categories';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsCategoriesGet not implemented');
  }

  /**
   * Test case for projectsExtensionsGet.
   *
   * Get all possible project extensions. Extensions are automatically added to projects based on their bricks..
   */
  public function testProjectsExtensionsGet(): void
  {
    $client = self::$client;

    $path = '/projects/extensions';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsExtensionsGet not implemented');
  }

  /**
   * Test case for projectsFeaturedGet.
   *
   * Get the currently featured projects.
   */
  public function testProjectsFeaturedGet(): void
  {
    $client = self::$client;

    $path = '/projects/featured';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsFeaturedGet not implemented');
  }

  /**
   * Test case for projectsGet.
   *
   * Get projects.
   */
  public function testProjectsGet(): void
  {
    $client = self::$client;

    $path = '/projects';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsGet not implemented');
  }

  /**
   * Test case for projectsPost.
   *
   * Upload a catrobat project.
   */
  public function testProjectsPost(): void
  {
    $client = self::$client;

    $path = '/projects';

    $crawler = $client->request('POST', $path);
    $this->markTestSkipped('Test for projectsPost not implemented');
  }

  /**
   * Test case for projectsSearchGet.
   *
   * Search for projects associated with a keywords.
   */
  public function testProjectsSearchGet(): void
  {
    $client = self::$client;

    $path = '/projects/search';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsSearchGet not implemented');
  }

  /**
   * Test case for projectsTagsGet.
   *
   * Get all possible project tags. Some Tags will only be availabe during events..
   */
  public function testProjectsTagsGet(): void
  {
    $client = self::$client;

    $path = '/projects/tags';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsTagsGet not implemented');
  }

  /**
   * Test case for projectsUserGet.
   *
   * Get the projects of the logged in user.
   */
  public function testProjectsUserGet(): void
  {
    $client = self::$client;

    $path = '/projects/user';

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsUserGet not implemented');
  }

  /**
   * Test case for projectsUserIdGet.
   *
   * Get the public projects of a given user.
   */
  public function testProjectsUserIdGet(): void
  {
    $client = self::$client;

    $path = '/projects/user/{id}';
    $pattern = '{id}';
    $data = $this->genTestData('^[a-zA-Z0-9\\-]+$');
    $path = str_replace($pattern, $data, $path);

    $crawler = $client->request('GET', $path);
    $this->markTestSkipped('Test for projectsUserIdGet not implemented');
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
