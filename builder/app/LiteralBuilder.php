<?php

namespace App;

class LiteralBuilder implements QueryBuilder {
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
        $query = "Je sélectionne les champs " . implode(", ", $this->columns) . " de la table " . $this->table;
        if (!empty($this->conditions)) {
            $query .= " où " . implode(" et ", $this->conditions);
        }
        return $query;
    }
}
