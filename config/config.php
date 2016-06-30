<?php

 $GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Script', 'flushScript');
 $GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('Script', 'extractScript');
