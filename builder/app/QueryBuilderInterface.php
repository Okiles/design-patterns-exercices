<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface {
    public function select(array $columns);
    public function from(string $table);
    public function where(string $condition);
    public function build(): string;
}
