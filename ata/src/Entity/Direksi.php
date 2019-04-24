<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the Direksi entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "direksi",
 *  label = @Translation("Direksi"),
 *  base_table = "ata_direksi",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class Direksi extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID anggota direksi.'))
            ->setReadOnly(TRUE);

        $fields['nama_lengkap'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama Lengkap'))
            ->setDescription(t('Nama lengkap anggota direksi.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['nomor_telepon'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nomor Telepon'))
            ->setDescription(t('Nomor telepon anggota direksi.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 15,
                'text_processing' => 0,
            ));

        $fields['jabatan'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Jabatan'))
            ->setDescription(t('Jabatan anggota direksi.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));
            
        return $fields;
    }
}
?>