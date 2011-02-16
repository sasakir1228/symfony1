<?php

/**
 * BaseAuthorInheritanceConcrete
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $additional
 * 
 * @method string                    getAdditional() Returns the current record's "additional" value
 * @method AuthorInheritanceConcrete setAdditional() Sets the current record's "additional" value
 * 
 * @package    symfony12
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseAuthorInheritanceConcrete extends Author
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('author_inheritance_concrete');
        $this->hasColumn('additional', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}