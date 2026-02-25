<?php
namespace MediaWiki\Extension\CheckURL;

use SpecialPage;
use MediaWiki\Html\Html;

class SpecialCheckURL extends SpecialPage {

	public function __construct() {
		parent::__construct( 'CheckURL' );
	}

	public function execute( $par ) {
		$this->setHeaders();
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'checkurl-title' )->text() );

		$out->addHTML(
			Html::rawElement(
				'div',
				[
					'style' =>
						'max-width:600px;margin:40px auto;padding:20px;' .
						'border:2px solid #e5533d;border-radius:8px;' .
						'background:#fff4f2;font-size:16px;'
				],
				'<h2>' . $this->msg( 'checkurl-heading' )->escaped() . '</h2>' .
				'<p>' . $this->msg( 'checkurl-text' )->escaped() . '</p>' .
				'<p><a href="/">' . $this->msg( 'checkurl-back' )->escaped() . '</a></p>'
			)
		);
	}
}
