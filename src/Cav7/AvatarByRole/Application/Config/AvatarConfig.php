<?php

namespace Cav7\AvatarByRole\Application\Config;

class AvatarConfig
{
    /**
     * @return AvatarGroup[]
     */
    public static function all(): array
    {
        return [
            new AvatarGroup(22, 'PVT', '/styles/default/xenforo/avatars/PVT_Avatar.png'),
            new AvatarGroup(21, 'PFC', '/styles/default/xenforo/avatars/PFC_Avatar.png'),
            new AvatarGroup(20, 'SPC', '/styles/default/xenforo/avatars/SPC_Avatar.png'),
            new AvatarGroup(19, 'CPL', '/styles/default/xenforo/avatars/CPL_Avatar.png'),
            new AvatarGroup(18, 'SGT', '/styles/default/xenforo/avatars/SGT_Avatar.png'),
            new AvatarGroup(17, 'SSG', '/styles/default/xenforo/avatars/SSG_Avatar.png'),
            new AvatarGroup(16, 'SFC', '/styles/default/xenforo/avatars/SFC_Avatar.png'),
            new AvatarGroup(15, 'MSG', '/styles/default/xenforo/avatars/MSG_Avatar.png'),
            new AvatarGroup(14, '1SG', '/styles/default/xenforo/avatars/1SG_Avatar.png'),
            new AvatarGroup(13, 'SGM', '/styles/default/xenforo/avatars/SGM_Avatar.png'),
            new AvatarGroup(12, 'CSM', '/styles/default/xenforo/avatars/CSM_Avatar.png'),
            new AvatarGroup(30, 'WO1', '/styles/default/xenforo/avatars/WO1_Avatar.png'),
            new AvatarGroup(29, 'CW2', '/styles/default/xenforo/avatars/CW2_Avatar.png'),
            new AvatarGroup(28, 'CW3', '/styles/default/xenforo/avatars/CW3_Avatar.png'),
            new AvatarGroup(27, 'CW4', '/styles/default/xenforo/avatars/CW4_Avatar.png'),
            new AvatarGroup(26, 'CW5', '/styles/default/xenforo/avatars/CW5_Avatar.png'),
            new AvatarGroup(11, '2LT', '/styles/default/xenforo/avatars/2LT_Avatar.png'),
            new AvatarGroup(10, '1LT', '/styles/default/xenforo/avatars/1LT_Avatar.png'),
            new AvatarGroup(9, 'CPT', '/styles/default/xenforo/avatars/CPT_Avatar.png'),
            new AvatarGroup(8, 'MAJ', '/styles/default/xenforo/avatars/MAJ_Avatar.png'),
            new AvatarGroup(7, 'LTC', '/styles/default/xenforo/avatars/LTC_Avatar.png'),
            new AvatarGroup(6, 'COL', '/styles/default/xenforo/avatars/COL_Avatar.png'),
            new AvatarGroup(5, 'BG', '/styles/default/xenforo/avatars/BG_Avatar.png'),
            new AvatarGroup(4, 'MG', '/styles/default/xenforo/avatars/MG_Avatar.png'),
            new AvatarGroup(3, 'LTG', '/styles/default/xenforo/avatars/LTG_Avatar.png'),
            new AvatarGroup(2, 'GEN', '/styles/default/xenforo/avatars/GEN_Avatar.png'),
            new AvatarGroup(1, 'GOA', '/styles/default/xenforo/avatars/GOA_Avatar.png'),
            new AvatarGroup(31, 'RES', '/styles/default/xenforo/avatars/RES_Avatar.png'),
        ];
    }

    public static function findByGroupId(int $id): ?AvatarGroup
    {
        foreach (self::all() as $group) {
            if ($group->groupId === $id) return $group;
        }
        return null;
    }

    public static function findBySlug(string $slug): ?AvatarGroup
    {
        foreach (self::all() as $group) {
            if ($group->slug === $slug) return $group;
        }
        return null;
    }

    public static function isReservistGroupId(int $id): bool
    {
        $group = self::findByGroupId($id);
        return $group && $group->slug === 'reservist';
    }
}
