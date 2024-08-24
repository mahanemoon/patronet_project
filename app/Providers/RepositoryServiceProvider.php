<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Coding;
use App\Models\Product;
use App\Repositories\BrandInterface;
use App\Repositories\BrandMySQLRepository;
use App\Repositories\CodingMySQLRepository;
use App\Repositories\ProductMYSQLRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
        public function register(){
            $this->app->bind(BrandInterface::class, function($app){
                return new BrandMySQLRepository(new Brand());
        });
            $this->app->bind(Coding::class, function($app){
                return new CodingMySQLRepository(new Coding());
        });
            $this->app->bind(Product::class,function($app){
                return new ProductMYSQLRepository(new Product());
        });
    }
}