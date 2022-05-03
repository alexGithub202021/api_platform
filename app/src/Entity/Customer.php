<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;

/**
 * Customer
 *
 * @ORM\Table(name="Customer")
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 * @ApiResource(attributes={"pagination_enabled": true})
 * @ApiFilter(SearchFilter::class, properties={"idcustomer": "exact", "society": "partial"})
 * @ApiFilter(RangeFilter::class, properties={"idsalesperson"})
 * @ApiFilter(OrderFilter::class, properties={"idcustomer"})
 */
class Customer
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCustomer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcustomer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Society", type="string", length=45, nullable=true)
     */
    private $society;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdSalesperson", type="integer", nullable=true)
     */
    private $idsalesperson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Credit", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $credit;

    public function getIdcustomer(): ?int
    {
        return $this->idcustomer;
    }

    public function getSociety(): ?string
    {
        return $this->society;
    }

    public function setSociety(?string $society): self
    {
        $this->society = $society;

        return $this;
    }

    public function getIdsalesperson(): ?int
    {
        return $this->idsalesperson;
    }

    public function setIdsalesperson(?int $idsalesperson): self
    {
        $this->idsalesperson = $idsalesperson;

        return $this;
    }

    public function getCredit(): ?string
    {
        return $this->credit;
    }

    public function setCredit(?string $credit): self
    {
        $this->credit = $credit;

        return $this;
    }


}
