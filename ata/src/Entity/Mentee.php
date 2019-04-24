<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the Mentee entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "mentee",
 *  label = @Translation("Mentee"),
 *  base_table = "ata_mentee",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class Mentee extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID mentee.'))
            ->setReadOnly(TRUE);

        $fields['nama_lengkap'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama Lengkap'))
            ->setDescription(t('Nama lengkap mentee.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['nomor_telepon'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nomor Telepon'))
            ->setDescription(t('Nomor telepon mentee.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 15,
                'text_processing' => 0,
            ));

        $fields['no_absen'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Nomor Absen'))
            ->setDescription(t('Nomor absen mentee.'));

        $fields['nilai_rata_rata'] = BaseFieldDefinition::create('decimal')
            ->setlabel(t('Nilai Rata-Rata'))
            ->setDescription(t('Nilai rata-rata mentee.'))
            ->setSettings(array(
                'precision' => 3,
                'scale' => 2,
            ));
            
        return $fields;
    }
}
?>