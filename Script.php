<?php

class Script extends Frontend {
   public function extractScript($template) {
        while (($start = strpos($template, '{{script}}')) !== false) {
        	$end = strpos($template, '{{/script}}');

        	$GLOBALS['INLINE_SCRIPT'][] = substr($template, $start + 10, $end - $start - 10);
        	$template = substr_replace($template, '', $start, $end - $start + 11);
        }

        return $template;
     }

     public function flushScript($insertTag) {

      if ($insertTag === 'script::flush' && empty($GLOBALS['INLINE_SCRIPT']) === false) {

        $scriptTag = '<script>';

        foreach($GLOBALS['INLINE_SCRIPT'] as $script) {
          $scriptTag .= str_replace(array('<script>', '</script>'), '', $script);
        }

        $scriptTag .= '</script>';

        $GLOBALS['INLINE_SCRIPT'] = [];

        return $scriptTag;
      }

      return false;
    }
}
