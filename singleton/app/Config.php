<?php

namespace App;

class Config {
    private static ?Config $instance = null;
    private array $settings = [];

    private function __construct() {
        $this->settings = [
            'theme' => 'light',
            'language' => 'en',
        ];
    }

    public static function getInstance(): Config {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get(string $key) {
        return $this->settings[$key] ?? null;
    }

    public function set(string $key, $value): void {
        $this->settings[$key] = $value;
    }

    private function __clone() {}
    private function __wakeup() {}
}
