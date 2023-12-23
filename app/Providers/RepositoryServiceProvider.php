<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CategoryInterface;
use App\Interfaces\api\CategoryInterface as apiCategoryInterface;
use App\Interfaces\api\ProductInterface as apiProductInterface;


use App\Repositories\CategoryRepository;
use App\Repositories\api\CategoryRepository as apiCategoryRepository;
use App\Repositories\api\ProductRepository as apiProductRepository;


use App\Interfaces\ProductInterface;
use App\Repositories\ProductRepository;

class RepositoryServiceProvider extends ServiceProvider {

    public function register():void{

    }



    public function boot(): void
    {
        $this->app->bind(CategoryInterface::class , CategoryRepository::class);
        $this->app->bind(apiCategoryInterface::class , apiCategoryRepository::class);

        $this->app->bind(ProductInterface::class , ProductRepository::class);
        $this->app->bind(apiProductInterface::class , apiProductRepository::class);


    }
}
