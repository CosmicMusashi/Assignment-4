<?php
 class WP_HTML_Processor_State { const INSERTION_MODE_INITIAL = 'insertion-mode-initial'; const INSERTION_MODE_IN_BODY = 'insertion-mode-in-body'; public $stack_of_open_elements = null; public $active_formatting_elements = null; public $current_token = null; public $insertion_mode = self::INSERTION_MODE_INITIAL; public $context_node = null; public $frameset_ok = true; public function __construct() { $this->stack_of_open_elements = new WP_HTML_Open_Elements(); $this->active_formatting_elements = new WP_HTML_Active_Formatting_Elements(); } } 