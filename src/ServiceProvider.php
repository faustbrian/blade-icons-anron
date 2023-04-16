<?php

declare(strict_types=1);

namespace PreemStudio\BladeIcons\Anron;

use Illuminate\Support\Facades\File;
use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('blade-icons/anron');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('anron', $directory));
        }
    }
}
