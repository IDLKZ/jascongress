<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Repositories\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version June 10, 2021, 11:44 am UTC
*/

class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'title_kz',
        'content',
        'content_kz',
        'img',
        'seo_title',
        'seo_description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
