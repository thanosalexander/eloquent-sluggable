<?php namespace Cviebrock\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMaxLength
 *
 * @package Cviebrock\EloquentSluggable\Tests\Models
 */
class PostWithUniqueIfEmpty extends Post
{

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique' => true,
                'uniqueSourceIfEmpty' => 'id',
            ]
        ];
    }
}
