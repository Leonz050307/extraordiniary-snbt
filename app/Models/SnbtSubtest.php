<?php

namespace App\Models;

class SnbtSubtest
{
    public const PENALARAN_UMUM = 'penalaran_umum';
    public const PENGETAHUAN_PEMAHAMAN_UMUM = 'pengetahuan_pemahaman_umum';
    public const PENGETAHUAN_KUANTITATIF = 'pengetahuan_kuantitatif';
    public const MEMAHAMI_BACAAN_MENULIS = 'memahami_bacaan_menulis';
    public const LITERASI_INDONESIA = 'literasi_bahasa_indonesia';
    public const LITERASI_INGGRIS = 'literasi_bahasa_inggris';
    public const PENALARAN_MATEMATIKA = 'penalaran_matematika';

    public const MAX_SCORE = 1000;

    /**
     * Get list of all SNBT subtests.
     */
    public static function all(): array
    {
        return [
            self::PENALARAN_UMUM => [
                'label' => 'Kemampuan Penalaran Umum',
            ],
            self::PENGETAHUAN_PEMAHAMAN_UMUM => [
                'label' => 'Pengetahuan dan Pemahaman Umum',
            ],
            self::PENGETAHUAN_KUANTITATIF => [
                'label' => 'Pengetahuan Kuantitatif',
            ],
            self::MEMAHAMI_BACAAN_MENULIS => [
                'label' => 'Kemampuan Memahami Bacaan dan Menulis',
            ],
            self::LITERASI_INDONESIA => [
                'label' => 'Literasi dalam Bahasa Indonesia',
            ],
            self::LITERASI_INGGRIS => [
                'label' => 'Literasi dalam Bahasa Inggris',
            ],
            self::PENALARAN_MATEMATIKA => [
                'label' => 'Penalaran Matematika',
            ],
        ];
    }

    /**
     * Determine if provided key is valid subtest identifier.
     */
    public static function isValid(?string $subtest): bool
    {
        if ($subtest === null) {
            return false;
        }

        return array_key_exists($subtest, self::all());
    }
}
