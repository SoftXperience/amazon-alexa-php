<?php

namespace Alexa\Response;

class OutputSpeechSSML extends OutputSpeech {
	public $type = 'SSML';
	public $text = '';

	public function render() {
		return [
			'type' => $this->type,
			'ssml' => $this->text
		];
	}
}