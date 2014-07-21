<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ant\MediaBundle\PHPCR;

use Sonata\MediaBundle\PHPCR\BaseGalleryHasMedia as BaseGalleryHasMedia;

/**
 * This file has been generated by the EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://docs.doctrine-project.org/projects/doctrine-phpcr-odm/en/latest/index.html
 *
 * @author <yourname> <youremail>
 */
class GalleryHasMedia extends BaseGalleryHasMedia
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}