<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Blog
 * @package App\Models
 * @version June 10, 2021, 11:44 am UTC
 *
 * @property string $title
 * @property string $title_kz
 * @property string $content
 * @property string $content_kz
 * @property string $img
 * @property string $seo_title
 * @property string $seo_description
 */
class Blog extends Model
{
    use SoftDeletes;

    use HasFactory;


    public $table = 'blog';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['created_at'];



    public $fillable = [
        'title',
        'title_kz',
        'content',
        'content_kz',
        'seo_title',
        'seo_description'
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
        'seo_title' => 'string',
        'seo_description' => 'string'
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
        'img' => 'sometimes|image',
        'seo_title' => 'required|string|max:255',
        'seo_description' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();
        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if($this->img != null)
        {
            Storage::delete('uploads/' . $this->img);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->img = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->img == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->img;

    }

}
