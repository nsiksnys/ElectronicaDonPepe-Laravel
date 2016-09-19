<?php
namespace DonPepe\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class ProductoRepository extends Repository {

    public function model() {
        return 'DonPepe\Producto';
    }
}