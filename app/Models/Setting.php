<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Setting
 * @package App\Models
 * @version June 10, 2021, 1:49 pm UTC
 *
 * @property string $logo
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $time
 * @property string $instagram
 * @property string $twitter
 * @property string $facebook
 * @property string $telegram
 * @property string $whatsapp
 */
class Setting extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'settings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'address',
        'address_kz',
        'phone',
        'email',
        'time',
        'time_kz',
        'instagram',
        'twitter',
        'facebook',
        'telegram',
        'whatsapp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address' => 'string',
        'address_kz' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'time' => 'string',
        'time_kz' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'facebook' => 'string',
        'telegram' => 'string',
        'whatsapp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'logo' => 'sometimes|image',
        'address' => 'required|string|max:255',
        'address_kz' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required',
        'time' => 'required|string|max:255',
        'time_kz' => 'required|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'facebook' => 'nullable|string|max:255',
        'telegram' => 'nullable|string|max:255',
        'whatsapp' => 'nullable|string|max:255',
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
        if($this->logo != null)
        {
            Storage::delete('uploads/' . $this->logo);
        }
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->logo = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->logo == null)
        {
            return '/img/no-image.png';
        }

        return '/uploads/' . $this->logo;

    }
}
