<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Banner
 * @package App\Models
 * @version June 13, 2021, 8:53 am UTC
 *
 * @property string $title
 * @property string $title_kz
 * @property string $content
 * @property string $content_kz
 * @property string $experience
 * @property string $experience_kz
 * @property string $experience_content
 * @property string $experience_content_kz
 * @property string $organization
 * @property string $organization_kz
 * @property string $organization_content
 * @property string $organization_content_kz
 */
class Banner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'banners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'title_kz',
        'content',
        'content_kz',
        'experience',
        'experience_kz',
        'experience_content',
        'experience_content_kz',
        'organization',
        'organization_kz',
        'organization_content',
        'organization_content_kz'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'title_kz' => 'string',
        'content' => 'string',
        'content_kz' => 'string',
        'experience' => 'string',
        'experience_kz' => 'string',
        'experience_content' => 'string',
        'experience_content_kz' => 'string',
        'organization' => 'string',
        'organization_kz' => 'string',
        'organization_content' => 'string',
        'organization_content_kz' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'title_kz' => 'required|string|max:255',
        'content' => 'required|string',
        'content_kz' => 'required|string',
        'experience' => 'required|string|max:255',
        'experience_kz' => 'required|string|max:255',
        'experience_content' => 'required|string|max:255',
        'experience_content_kz' => 'required|string|max:255',
        'organization' => 'required|string|max:255',
        'organization_kz' => 'required|string|max:255',
        'organization_content' => 'required|string|max:255',
        'organization_content_kz' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
