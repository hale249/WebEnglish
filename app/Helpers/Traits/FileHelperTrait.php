<?php

namespace App\Helpers\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileHelperTrait
{
    /**
     * Handle upload file
     *
     * @param UploadedFile $file
     * @param null $path
     * @return string
     */
    public function uploadFile(UploadedFile $file, $path = null): string
    {
        $path = $path ? '/images/' . $path : '/images';
        Storage::disk('local')->put($path, $file);

        return rtrim($path, ' /') . '/' . $file->hashName();
    }
}
