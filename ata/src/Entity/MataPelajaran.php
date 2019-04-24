<?php

namespace Drupal\ata\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the MataPelajaran entity
 * 
 * @ingroup ata
 * 
 * @ContentEntityType(
 *  id = "mata_pelajaran",
 *  label = @Translation("MataPelajaran"),
 *  base_table = "ata_mata_pelajaran",
 *  entity_keys = {
 *      "id" = "id",
 *      "label" = "name",
 *  },
 * )
 */

class MataPelajaran extends ContentEntityBase implements ContentEntityInterface {
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('ID mata pelajaran.'))
            ->setReadOnly(TRUE);

        $fields['nama_pelajaran'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Nama Pelajaran'))
            ->setDescription(t('Nama mata pelajaran.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ));

        $fields['jadwal_dimulai'] = BaseFieldDefinition::create('datetime')
            ->setLabel(t('Jadwal Dimulai'))
            ->setDescription(t('Jadwal dimulainya mata pelajaran.'))
            ->setSettings(array(
              'datetime_type' => 'date'
            ))
            ->setDefaultValue('');

        $fields['jadwal_berakhir'] = BaseFieldDefinition::create('datetime')
            ->setLabel(t('Jadwal Berakhir'))
            ->setDescription(t('Jadwal berakhirnya mata pelajaran.'))
            ->setSettings(array(
              'datetime_type' => 'date'
            ))
            ->setDefaultValue('');

        return $fields;
    }
}
?>