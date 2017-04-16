<?php

namespace WCS\CoavBundle\Entity;

/**
 * Flight
 */
class Flight
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \WCS\CoavBundle\Entity\Terrain
     */
    private $departure;

    /**
     * @var \WCS\CoavBundle\Entity\Terrain
     */
    private $arrival;

    /**
     * @var \WCS\CoavBundle\Entity\PlaneModel
     */
    private $plane;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->takeofTime->format('d-m-Y') . " de " . $this->departure . " à " . $this->arrival ;
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
     * Set freeSeats
     *
     * @param integer $freeSeats
     *
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     *
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Add reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     *
     * @return Flight
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set departure
     *
     * @param \WCS\CoavBundle\Entity\Terrain $departure
     *
     * @return Flight
     */
    public function setDeparture(\WCS\CoavBundle\Entity\Terrain $departure = null)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \WCS\CoavBundle\Entity\Terrain
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \WCS\CoavBundle\Entity\Terrain $arrival
     *
     * @return Flight
     */
    public function setArrival(\WCS\CoavBundle\Entity\Terrain $arrival = null)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \WCS\CoavBundle\Entity\Terrain
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }
}

