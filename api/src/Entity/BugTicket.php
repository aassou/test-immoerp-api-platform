<?php
// api/src/Entity/BugTicket.php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * A bug ticket.
 *
 * @ORM\Entity
 */
class BugTicket
{
    /**
     * @var int The id of the bug ticket
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The description of the bug ticket
     *
     *@ORM\Column(type="text")
     */
    public $description;

    /**
     * @var string The link of the bug ticket
     *
     * @ORM\Column(type="text")
     */
    public $link;

    /**
     * @var string The status of the bug ticket
     *
     * @ORM\Column(type="string")
     */
    public $status;

    /**
     * @var DateTimeInterface The creation date of the bug ticket
     *
     * @ORM\Column(type="datetime")
     */
    public $created;

    /**
     * @var string The user who created the bug ticket
     *
     * @ORM\Column(type="string")
     */
    public $createdBy;

    /**
     * @var DateTimeInterface The update date of the bug ticket
     *
     * @ORM\Column(type="datetime")
     */
    public $updated;

    /**
     * @var string The user who updated the bug ticket
     *
     * @ORM\Column(type="string")
     */
    public $updatedBy;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
