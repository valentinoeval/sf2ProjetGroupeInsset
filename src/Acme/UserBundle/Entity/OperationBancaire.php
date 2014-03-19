<?php

namespace Acme\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Acme\UserBundle\Entity\Categorie;
use Acme\UserBundle\Entity\Compte;



/**
 * @ORM\Entity
 * @ORM\Table(name="op_bancaire")
 */
class OperationBancaire
{
    /**
     * @var Id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        $this->categories   = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var Nom
     * @ORM\Column(type="string")
     */
    protected $nom;

    /**
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="operationBancaire")
     * @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     */
    protected $compteId;

    /**
     * @var Categorie
     * @ORM\ManyToMany(targetEntity="Categorie")
     **/
    protected $categories;

    /**
     * @var DateOperation
     * @ORM\Column(type="datetime")
     */
    protected $dateOperation;

    /**
     * @var Type
     * @ORM\Column(type="boolean")
     */
    protected $type;

    /**
     * @var Montant
     * @ORM\Column(type="decimal", precision=10, scale=5)
     */
    protected $montant;

    /**
     * @var Verif
     * @ORM\Column(type="integer")
     */
    protected $verif;

    /**
     * @var OperationPeriodique
     * @ORM\ManyToOne(targetEntity="OperationPeriodique", inversedBy="operationBancaire")
     * @ORM\JoinColumn(name="op_periodique_id", referencedColumnName="id")
     **/
    protected $operationPeriodique;

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
     * Set nom
     *
     * @param string $nom
     * @return OperationBancaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateOperation
     *
     * @param \DateTime $dateOperation
     * @return OperationBancaire
     */
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * Get dateOperation
     *
     * @return \DateTime 
     */
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return OperationBancaire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return OperationBancaire
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set verif
     *
     * @param integer $verif
     * @return OperationBancaire
     */
    public function setVerif($verif)
    {
        $this->verif = $verif;

        return $this;
    }

    /**
     * Get verif
     *
     * @return integer 
     */
    public function getVerif()
    {
        return $this->verif;
    }

    /**
     * Set compteId
     *
     * @param \Acme\UserBundle\Entity\Compte $compteId
     * @return OperationBancaire
     */
    public function setCompteId(\Acme\UserBundle\Entity\Compte $compteId = null)
    {
        $this->compteId = $compteId;

        return $this;
    }

    /**
     * Get compteId
     *
     * @return \Acme\UserBundle\Entity\Compte 
     */
    public function getCompteId()
    {
        return $this->compteId;
    }

    /**
     * Add categories
     *
     * @param \Acme\UserBundle\Entity\Categorie $categories
     * @return OperationBancaire
     */


    public function setCategories(\Acme\UserBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Acme\UserBundle\Entity\Categorie $categories
     */
    public function removeCategory(\Acme\UserBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set operationPeriodique
     *
     * @param \Acme\UserBundle\Entity\OperationPeriodique $operationPeriodique
     * @return OperationBancaire
     */
    public function setOperationPeriodique(\Acme\UserBundle\Entity\OperationPeriodique $operationPeriodique = null)
    {
        $this->operationPeriodique = $operationPeriodique;

        return $this;
    }

    /**
     * Get operationPeriodique
     *
     * @return \Acme\UserBundle\Entity\OperationPeriodique 
     */
    public function getOperationPeriodique()
    {
        return $this->operationPeriodique;
    }

    /**
     * Set compte
     *
     * @param \Acme\UserBundle\Entity\Compte $compte
     * @return OperationBancaire
     */
    public function setCompte(\Acme\UserBundle\Entity\Compte $compte = null)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \Acme\UserBundle\Entity\Compte 
     */
    public function getCompte()
    {
        return $this->compte;
    }
}
