<?php

namespace WCS\CoavBundle\Entity;

/**
 * Terrain
 */
class Terrain
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $icao;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $arrivals;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->arrivals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Terrain
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set icao
     *
     * @param string $icao
     *
     * @return Terrain
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;

        return $this;
    }

    /**
     * Get icao
     *
     * @return string
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     *
     * @return Terrain
     */
    public function addDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures[] = $departure;

        return $this;
    }

    /**
     * Remove departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     */
    public function removeDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures->removeElement($departure);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartures()
    {
        return $this->departures;
    }

    /**
     * Add arrival
     *
     * @param \WCS\CoavBundle\Entity\Flight $arrival
     *
     * @return Terrain
     */
    public function addArrival(\WCS\CoavBundle\Entity\Flight $arrival)
    {
        $this->arrivals[] = $arrival;

        return $this;
    }

    /**
     * Remove arrival
     *
     * @param \WCS\CoavBundle\Entity\Flight $arrival
     */
    public function removeArrival(\WCS\CoavBundle\Entity\Flight $arrival)
    {
        $this->arrivals->removeElement($arrival);
    }

    /**
     * Get arrivals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArrivals()
    {
        return $this->arrivals;
    }
}

