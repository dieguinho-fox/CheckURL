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

		$out->setPageTitle( 'Verifique o URL' );

		$out->addHTML(
			Html::rawElement(
				'div',
				[
					'style' =>
						'max-width:600px;margin:40px auto;padding:20px;' .
						'border:2px solid #e5533d;border-radius:8px;' .
						'background:#fff4f2;font-size:16px;'
				],
				'<h2>⚠️ URL inválido</h2>' .
				'<p>O endereço que você tentou acessar não corresponde a nenhuma página válida da wiki.</p>' .
				'<p>Verifique se o URL está correto ou utilize a navegação do site.</p>' .
				'<p><a href="/">Voltar para a Página principal</a></p>'
			)
		);
	}
}
