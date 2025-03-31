<?php
namespace FoodItems;

use DateTime;

class FoodOrder {
    private array $items; // FoodItem[] の配列
    private DateTime $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = new DateTime(); // 現在の時刻をセット
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getOrderTime(): DateTime {
        return $this->orderTime;
    }
}
