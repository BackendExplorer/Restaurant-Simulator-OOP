<?php
namespace FoodItems;

use DateTime;

class Invoice {
    private float $finalPrice;
    private DateTime $orderTime;
    private int $estimatedTimeInMinutes;
    private FoodOrder $foodOrder;

    public function __construct(FoodOrder $foodOrder, int $estimatedTimeInMinutes) {
        $this->foodOrder = $foodOrder;
        $this->orderTime = $foodOrder->getOrderTime();
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
        $this->finalPrice = $this->calculateFinalPrice();
    }

    private function calculateFinalPrice(): float {
        $total = 0;
        foreach ($this->foodOrder->getItems() as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function getFinalPrice(): float {
        return $this->finalPrice;
    }

    public function getOrderTime(): DateTime {
        return $this->orderTime;
    }

    public function getEstimatedTimeInMinutes(): int {
        return $this->estimatedTimeInMinutes;
    }

    public function getFoodOrder(): FoodOrder {
        return $this->foodOrder;
    }
}
