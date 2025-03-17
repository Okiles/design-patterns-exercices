<?php
require('../vendor/autoload.php');

$mysqlBuilder = new MySqlQueryBuilder();

$mysqlQuery = $mysqlBuilder->select(["name", "age"])
                            ->from("users")
                            ->where("age > 18")
                            ->build();

echo $mysqlQuery;
