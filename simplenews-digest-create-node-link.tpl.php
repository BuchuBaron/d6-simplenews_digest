<?php
$html = '<h2>' . l(check_plain($node->title), 'node/' . $node->nid, array('absolute' => TRUE)) . '</h2>';
$html .= '<img src="/'. $node->img . '" /><br clear="all" /><hr />';

print $html;
