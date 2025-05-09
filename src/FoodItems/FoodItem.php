<?php
namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected float $price;

    public const CATEGORY = ""; 

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public static function getCategory(): string {
        return static::CATEGORY;
    }
}
