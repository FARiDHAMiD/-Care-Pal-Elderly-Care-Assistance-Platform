<?php

namespace App\MediaLibrary\PathGenerator;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomPathGenerator implements PathGenerator
{
    /**
     * Get the base path for the media.
     */
    public function getPath(Media $media): string
    {
        if ($media->collection_name === 'client_profile') {
            return 'client-profiles/' . $media->id . '/';
        }

        // Default path
        return 'media/' . $media->id . '/';
    }

    /**
     * Get the path for the conversions of the media.
     */
    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversions/';
    }

    /**
     * Get the path for responsive images of the media.
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive-images/';
    }
}
