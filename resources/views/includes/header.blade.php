@php

    use Secrethash\Dropmenu\Dropmenu;
    // Icon Settings
    $settings['icon']['prefix'] = '<div id="navElement1"><i id="someThing" class="';
    $settings['icon']['suffix'] = '"></i>';
    $settings['icon']['line_end'] = '</div>';

    // Child Settings
    $settings['child']['ul_attributes'] = 'class="nav nav_child"';

    // Global Settings
    $settings['global']['method'] = "ROUTE"; # ROUTE or URL

    $dm = new Dropmenu();
    $ret = $dm->display('admin:nav', $settings);
    echo($ret);

@endphp
