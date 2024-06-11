<?php

namespace Hoangnv\PhpOop\Models;

use Hoangnv\PhpOop\Commons\Model;

class Product extends Model 
{
    protected string $tableName = 'products';
    public function all()
    {
        return $this->queryBuilder
        ->select(
            'p.id',
            'p.category_id',
            'p.name',
           
            'p.img_thumbnail',
            'p.overview',
            'p.content',
            'p.created_at',
            'p.updated_at',
            'c.name as c_name'

        )
        ->from($this->tableName,'p')
        ->innerJoin('p','categories','c','c.id=p.category_id')
        ->orderBy('p.id','desc')
        ->fetchAllAssociative();
    }
    public function client()
    {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->setFirstResult(8)
        ->setMaxResults(8)
        ->orderBy('id', 'desc')
        ->fetchAllAssociative();
    }
}