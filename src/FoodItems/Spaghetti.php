<?php
namespace FoodItems;

class MeatPasta extends FoodItem {
    public const CATEGORY = "Pasta";

    public function __construct() {
        parent::__construct(
            "Spaghetti", 
            "A type of long, thin pasta popular in Italian cuisine.", 
            18.0
        );
    }
}
