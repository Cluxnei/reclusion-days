<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WorkOfArt extends Model
{
    protected $table = 'works_of_arts';

    protected $guarded = [];

    /**
     * Return random placeholder image between 3
     * @return string
     */
    public function getPlaceholder()
    {
        try {
            return 'images/pic0' . random_int(1, 3) . '.jpg';
        } catch (\Exception $e) {
            return 'images/pic3.jpg';
        }
    }

    /**
     * Return the url of photo
     *
     * @param string $photo
     * @return string
     */
    public function getPhotoAttribute(string $photo)
    {
        return Storage::url($photo);
    }
}
