<?php
namespace App;

class MySqlQueryBuilder implements QueryBuilder {
    private $columns = [];
    private $table = "";
    private $conditions = [];

    public function select(array $columns) {
        $this->columns = $columns;
        return $this;
    }

    public function from(string $table) {
        $this->table = $table;
        return $this;
    }

    public function where(string $condition) {
        $this->conditions[] = $condition;
        return $this;
    }

    public function build(): string {
        $query = "SELECT " . implode(", ", $this->columns) . " FROM " . $this->table;
        if (!empty($this->conditions)) {
            $query .= " WHERE " . implode(" AND ", $this->conditions);
        }
        return $query;
    }
}
