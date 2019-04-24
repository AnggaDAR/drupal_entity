<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the Mentor entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "mentor",
 *  label = @Translation("Mentor"),
 *  base_table = "ata_mentor",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class Mentor extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID mentor.'))
            ->setReadOnly(TRUE);

        $fields['nama_lengkap'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama Lengkap'))
            ->setDescription(t('Nama lengkap mentor.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['nomor_telepon'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nomor Telepon'))
            ->setDescription(t('Nomor telepon mentor.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 15,
                'text_processing' => 0,
            ));

        $fields['mata_pelajaran'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Mata Pelajaran'))
            ->setDescription(t('Mata pelajaran mentor.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));   
                 
        return $fields;
    }
}
?>