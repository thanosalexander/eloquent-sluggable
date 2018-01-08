<?php namespace Cviebrock\EloquentSluggable\Tests;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Tests\Models\PostIssue403;

/**
 * Class IssueTests
 *
 * @package Tests
 */
class IssueTests extends TestCase
{

    /**
     * Test basic slugging functionality.
     */
    public function testIssue403()
    {
        $slug = SlugService::createSlug(PostIssue403::class, 'slug', 'چای گزنه با برگ زیتون');
        $this->assertEquals('چای-گزنه-با-برگ-زیتون', $slug);

        $post = PostIssue403::create([
            'title' => 'چای گزنه با برگ زیتون'
        ]);
        $this->assertEquals('چای-گزنه-با-برگ-زیتون', $post->slug);
    }

}
