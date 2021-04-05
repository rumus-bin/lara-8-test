<?php

namespace API\Services\Patherns\Builder;

class F1Bolid implements CarInterface
{
    private $seats;
    private $engine;
    private $wheels;

    /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param mixed $wheels
     * @return F1Bolid
     */
    public function setWheels($wheels): self
    {
        $this->wheels = $wheels;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGps()
    {
        return $this->gps;
    }

    /**
     * @param mixed $gps
     * @return F1Bolid
     */
    public function setGps($gps): self
    {
        $this->gps = $gps;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTripComputer()
    {
        return $this->tripComputer;
    }

    /**
     * @param mixed $tripComputer
     * @return F1Bolid
     */
    public function setTripComputer($tripComputer): self
    {
        $this->tripComputer = $tripComputer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param mixed $trailer
     * @return F1Bolid
     */
    public function setTrailer($trailer): self
    {
        $this->trailer = $trailer;
        return $this;
    }
    private $gps;

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $engine
     * @return F1Bolid
     */
    public function setEngine($engine): self
    {
        $this->engine = $engine;
        return $this;
    }
    private $tripComputer;
    private $trailer;

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }
    public function getSeats()
    {
        return $this->seats;
    }

    public function getSpeed(): int
    {
        return 400;
    }

    public function getSeatsCount(): int
    {
        return 1;
    }

    public function getLoadPowerInTons(): float
    {
        return 0.5;
    }
}
