<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CategoryInterface;
use App\Repositories\CategoryRepository;

class RepositoryServiceProvider extends ServiceProvider {

    public function register():void{

    }



    public function boot(): void
    {
        $this->app->bind(CategoryInterface::class , CategoryRepository::class);
    }
}
