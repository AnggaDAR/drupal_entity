<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the LiveCode entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "livecode",
 *  label = @Translation("LiveCode"),
 *  base_table = "ata_livecode",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class LiveCode extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID livecode.'))
            ->setReadOnly(TRUE);

        $fields['nama_livecode'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama LiveCode'))
            ->setDescription(t('Nama livecode.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['banyak_soal'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Banyak Soal'))
            ->setDescription(t('Banyak soal dalam livecode.'));

        $fields['bobot_nilai'] = BaseFieldDefinition::create('decimal')
            ->setlabel(t('Bobot Nilai'))
            ->setDescription(t('Bobot nilai livecode.'))
            ->setSettings(array(
                'precision' => 3,
                'scale' => 2,
            ));

        $fields['tanggal_pelaksanaan'] = BaseFieldDefinition::create('datetime')
            ->setLabel(t('Tanggal Pelaksanaan'))
            ->setDescription(t('Tanggal pelaksanaan livecode.'))
            ->setSettings(array(
              'datetime_type' => 'date'
            ))
            ->setDefaultValue('');
           
        $fields['mata_pelajaran'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Mata Pelajaran'))
            ->setDescription(t('Mata pelajaran livecode.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));  
            
        return $fields;
    }
}
?>