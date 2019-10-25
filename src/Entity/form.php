<?php


namespace App\Entity\form;


class form
{
private $naam;
private $mailadres;
private $bericht;

    /**
     * @return form
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @return form
     */
    public function getMailadres()
    {
        return $this->mailadres;
    }

    /**
     * @return form
     */
    public function getBericht()
    {
        return $this->bericht;
    }
}