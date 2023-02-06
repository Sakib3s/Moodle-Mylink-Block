<?php
class block_mylinks extends block_base {
    public function init() {
        $this->title = 'My Link';
    }
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content = new stdClass;
        $this->content->text = 'Edma - Moodle 4+ LMS Education Theme: <a href="https://1.envato.market/kje4KV" target="_blank">Click to Buy Now</a>';
        $this->content->footer = '';
        return $this->content;
    }
}