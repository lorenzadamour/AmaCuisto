<?php

namespace Partage\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="Partage\PartageBundle\Repository\PhotosRepository")
 */
class Photos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    // ..... other fields

   /**
    * NOTE: This is not a mapped field of entity metadata, just a simple property.
    *
    * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
    *
    * @var File
    */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="imageName", type="string", length=255)
     */
    private $imageName;

    /**
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime$
    */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Atelier", inversedBy="photos")
     */
    private $atelier;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


        /**
         * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
         * of 'UploadedFile' is injected into this setter to trigger the  update. If this
         * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
         * must be able to accept an instance of 'File' as the bundle will inject one here
         * during Doctrine hydration.
         *
         * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
         *
         * @return Photos
         */
        public function setImageFile(File $image = null)
        {
            $this->imageFile = $image;

            if ($image) {
                // It is required that at least one field changes if you are using doctrine
                // otherwise the event listeners won't be called and the file is lost
                $this->updatedAt = new \DateTime('now');
            }

            return $this;
        }


    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     *
     * @return Photos
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Photos
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->atelier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     *
     * @return Photos
     */
    public function addAtelier(\Partage\PartageBundle\Entity\Atelier $atelier)
    {
        $this->atelier[] = $atelier;

        return $this;
    }

    /**
     * Remove atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     */
    public function removeAtelier(\Partage\PartageBundle\Entity\Atelier $atelier)
    {
        $this->atelier->removeElement($atelier);
    }

    /**
     * Get atelier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAtelier()
    {
        return $this->atelier;
    }

    /**
     * Set atelier
     *
     * @param \Partage\PartageBundle\Entity\Atelier $atelier
     *
     * @return Photos
     */
    public function setAtelier(\Partage\PartageBundle\Entity\Atelier $atelier = null)
    {
        $this->atelier = $atelier;

        return $this;
    }
}
