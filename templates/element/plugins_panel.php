<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         DebugKit 0.1
 * @license       https://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * @var \DebugKit\View\AjaxView $this
 * @var bool $hasEmptyAppConfig
 * @var array $plugins
 */
?>
<div class="c-plugins-panel">
    <?php
    $msg = 'This table shows all available plugins and your plugin configuration in';
    $msg .= ' <strong>config/plugins.php</strong><br>';
    printf('<p class="c-flash c-flash--info">%s</p>', $msg);
    ?>
    <section>
        <table class="c-debug-table">
            <thead>
            <tr>
                <th><?= __d('debug_kit', 'Plugin') ?></th>
                <th><?= __d('debug_kit', 'Is Loaded') ?></th>
                <th><?= __d('debug_kit', 'Only Debug') ?></th>
                <th><?= __d('debug_kit', 'Only CLI') ?></th>
                <th><?= __d('debug_kit', 'Optional') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($plugins as $pluginName => $pluginConfig) : ?>
                <tr>
                    <td><?= $pluginName ?></td>
                    <td><?= $pluginConfig['isLoaded'] ? $this->Html->image('DebugKit./img/cake-red.svg') : '' ?></td>
                    <td><?= $pluginConfig['onlyDebug'] ? $this->Html->image('DebugKit./img/cake-red.svg') : '' ?></td>
                    <td><?= $pluginConfig['onlyCli'] ? $this->Html->image('DebugKit./img/cake-red.svg') : '' ?></td>
                    <td><?= $pluginConfig['optional'] ? $this->Html->image('DebugKit./img/cake-red.svg') : '' ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
