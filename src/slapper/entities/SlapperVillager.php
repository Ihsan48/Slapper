<?php

declare(strict_types=1);

namespace slapper\entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SlapperVillager extends SlapperEntity {
    const TYPE_ID = EntityIds::VILLAGER;
    const HEIGHT = 1.95;
}
