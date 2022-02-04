<?php


class VOD
{
    public $films = [
        'un',
        'deux',
        'trois',
        'quatre',
        'cinq',
    ];

    public $tarif = 5;

    public static $nbrAbo = 0;

    /**
     * @return string[]
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param string[] $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return int
     */
    public function getTarif(): int
    {
        return $this->tarif;
    }

    /**
     * @param int $tarif
     */
    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getNbrAbo(): int
    {
        return self::$nbrAbo;
    }

    /**
     * @param int $nbrAbo
     */
    public static function setNbrAbo(int $nbrAbo): void
    {
        self::$nbrAbo = $nbrAbo;
    }

    /**
     * @return int
     */
    public function addAbo (){
        self::setNbrAbo(self::getNbrAbo() + 1);
    }

    public function getTotalAbo (){
        return self::getNbrAbo();
    }
}