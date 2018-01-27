<?php

declare(strict_types=1);

namespace Anti;
use Anti\Core;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\TextFormat;
class AntiAdvertising implements Listener {
    private $links = [".cc", ".net", ".com", ".us", ".co", ".co.uk", ".ddns", ".ddns.net", ".cf", ".me", ".pocket.pe", ".no-ip", ".live", ".pe", ".ml", ".gov", "http://", "ip", "port", "https://", "www", "cc", "net", "com", "us", "co", "couk", "ddns", "ddns.net", "cf", "me", "pocket.pe", "noip", "live", "pe", "ml", "gov", "http://", "ip", "port", "https://", "www"];
    public function __construct(Core $plugin) {
        #Useless
    }
    public function onChat(PlayerChatEvent $event) {
        $msg = $event->getMessage();
        $player = $event->getPlayer();
        foreach ($this->links as $links) {
            if (strpos($msg, $links) !== false) {
                $player->sendMessage(TextFormat::RED . "§l§9Anti-Core > §6Please don't advertise on our server.");
                $event->setCancelled(true);
                return;
            }
        }
    }
}
