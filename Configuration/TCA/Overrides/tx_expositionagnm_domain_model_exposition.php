<?php
    $GLOBALS['TCA']['tx_expositionagnm_domain_model_exposition']['columns']['lieu']['config'] = [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_expositionagnm_domain_model_lieu',
        'foreign_field' => 'exposition',
        'maxitems' => 1,
        'minitems' => 0,
    ];