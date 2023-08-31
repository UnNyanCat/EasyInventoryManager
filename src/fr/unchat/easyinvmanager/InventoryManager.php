<?php

namespace fr\unchat\easyinvmanager;

use pocketmine\item\Item;
use pocketmine\player\Player;

class InventoryManager
{
    public static function getItemInHand(Player $player): Item
    {
        return $player->getInventory()->getItemInHand();
    }

    public static function isItem(int $id, int $id1): bool
    {
        return $id == $id1;
    }
}