<?php
namespace FoodItems;

class Fettuccine extends FoodItem {
    public const CATEGORY = "Pasta";

    public function __construct() {
        parent::__construct(
            "Fettuccine",
            "Flat, ribbon-like pasta commonly used in creamy sauces.",
            6.0
        );
    }
}
