<?php

namespace AppBundle\Entity;

/**
 * Description of Group
 *
 * @author Jonathan Claros <jclaros at lysoftbo.com>
 */
use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_group")
 */
class Group extends BaseGroup{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    
    protected $group_name;
    
    /**
     *
     * @var Array 
     * @ORM\Column(type="array", nullable=true)
     */
    protected $group_roles;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="groups")
     **/
    protected $users;
    
    
}
