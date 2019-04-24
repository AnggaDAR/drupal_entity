<?php

namespace Drupal\ata\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * Defines ATAController class.
 */
class ATAController extends ControllerBase {
    /**
     * Display the markup
     * 
     * @return array
     *  Return markup array
     */
    public function content() {
        return [
            '#type' => 'markup',
            '#markup' => $this->t('ATA'),
        ];
    }
}
?>