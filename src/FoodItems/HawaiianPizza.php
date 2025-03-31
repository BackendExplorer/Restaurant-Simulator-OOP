<?php
namespace FoodItems;

class HawaiianPizza extends FoodItem {
    public const CATEGORY = "Pizza";

    public function __construct() {
        parent::__construct(
            "HawaiianPizza",
            "Hawaiian Pizza is a pizza topped with ham and pineapple.",
            11.0
        );
    }
}
