# Easy Inventory Manager

## Example

```php
$hand = InventoryManager::getItemInHand($player);

$isDirt = InventoryManager::isItem($hand->getTypeId(), VanillaBlocks::DIRT()->asItem()->getTypeId());
```
