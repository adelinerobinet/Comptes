<?php

/**
 * BaseMouvement
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $compte_id
 * @property boolean $traite
 * @property string $libelle
 * @property timestamp $date
 * @property string $credit
 * @property string $debit
 * @property Compte $Compte
 * 
 * @method integer   getCompteId()  Returns the current record's "compte_id" value
 * @method boolean   getTraite()    Returns the current record's "traite" value
 * @method string    getLibelle()   Returns the current record's "libelle" value
 * @method timestamp getDate()      Returns the current record's "date" value
 * @method string    getCredit()    Returns the current record's "credit" value
 * @method string    getDebit()     Returns the current record's "debit" value
 * @method Compte    getCompte()    Returns the current record's "Compte" value
 * @method Mouvement setCompteId()  Sets the current record's "compte_id" value
 * @method Mouvement setTraite()    Sets the current record's "traite" value
 * @method Mouvement setLibelle()   Sets the current record's "libelle" value
 * @method Mouvement setDate()      Sets the current record's "date" value
 * @method Mouvement setCredit()    Sets the current record's "credit" value
 * @method Mouvement setDebit()     Sets the current record's "debit" value
 * @method Mouvement setCompte()    Sets the current record's "Compte" value
 * 
 * @package    Comptes
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMouvement extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mouvement');
        $this->hasColumn('compte_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('traite', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('libelle', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('credit', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('debit', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Compte', array(
             'local' => 'compte_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}