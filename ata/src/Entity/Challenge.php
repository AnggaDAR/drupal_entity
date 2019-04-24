<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the Challenge entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "challenge",
 *  label = @Translation("Challenge"),
 *  base_table = "ata_challenge",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class Challenge extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID challenge.'))
            ->setReadOnly(TRUE);

        $fields['nama_challenge'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama Challenge'))
            ->setDescription(t('Nama challenge.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['banyak_soal'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Banyak Soal'))
            ->setDescription(t('Banyak soal dalam challenge.'));

        $fields['bobot_nilai'] = BaseFieldDefinition::create('decimal')
            ->setlabel(t('Bobot Nilai'))
            ->setDescription(t('Bobot nilai challenge.'))
            ->setSettings(array(
                'precision' => 3,
                'scale' => 2,
            ));
            
        $fields['mata_pelajaran'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Mata Pelajaran'))
            ->setDescription(t('Mata pelajaran challenge.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));  
            
        return $fields;
    }
}
?>