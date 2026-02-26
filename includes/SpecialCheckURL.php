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

		$out->addInlineStyle( '
			/* Base */
			.checkurl-box {
				max-width: 600px;
				margin: 40px auto;
				padding: 20px;
				border-radius: 8px;
				font-size: 16px;
				border: 2px solid #f54739;
			}

			.checkurl-box a {
				text-decoration: none;
			}

			.checkurl-box a:hover {
				text-decoration: underline;
			}

			/* Modo claro */
			html.skin-theme-clientpref-day .checkurl-box {
				background-color: #ffe9e5;
				color: #202122;
			}

			html.skin-theme-clientpref-day .checkurl-box a {
				color: #3366cc;
			}

			/* Modo escuro */
			html.skin-theme-clientpref-night .checkurl-box {
				background-color: #3c1a13;
				color: #f8f9fa;
			}

			html.skin-theme-clientpref-night .checkurl-box a {
				color: #8ab4f8;
			}

			/* Fallback (skins antigas / sem preferência) */
			@media (prefers-color-scheme: dark) {
				html:not(.skin-theme-clientpref-day) .checkurl-box {
					background-color: #3c1a13;
					color: #f8f9fa;
				}
			}
		' );

		$out->addHTML(
			Html::rawElement(
				'div',
				[ 'class' => 'checkurl-box' ],
				'<h2>' . $this->msg( 'checkurl-heading' )->escaped() . '</h2>' .
				'<p>' . $this->msg( 'checkurl-text' )->escaped() . '</p>' .
				'<p><a href="/">' . $this->msg( 'checkurl-back' )->escaped() . '</a></p>'
			)
		);
	}
}
