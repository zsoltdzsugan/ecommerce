<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\OptimizerChainFactory;

class ImageService
{
    public function __construct(protected string $disk = 'public') {}

    /**
     * Store a new image and return the file path.
     */
    public function store(UploadedFile $image, string $folder = 'profile_pictures'): string
    {
        $path = $image->store($folder, $this->disk);

        $absolutePath = Storage::disk($this->disk)->path($path);
        $this->optimize($absolutePath);

        return basename($path);
    }

    /**
     * Delete an existing image.
     */
    public function delete(?string $imagePath): void
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }

    /**
     * Optimize the image.
     */
    private function optimize(string $imagePath): void
    {
        $optimizerChain = OptimizerChainFactory::create(config('image-optimizer'));
        $optimizerChain->optimize($imagePath);
    }
}
