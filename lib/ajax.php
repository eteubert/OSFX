<?php
	namespace OSFX;

	class Ajax {
		function chapters() {
			$chapters = "";

			if ( ! $_POST["source"] )
				return;

			$shownotes = new Model\Shownotes;
			$shownotes->source = $_POST["source"];
			$shownotes->parse();

			foreach ($shownotes->shownotes as $shownote ) {
				if ( $shownote->type == "chapter" && $shownote->timestamp !== FALSE ) {
					$chapters .= $shownote->timestamp->format("H:i:s.u") . " " . $shownote->title . ( $shownote->url ? " <" . urldecode($shownote->url) . ">" : "" ) . "\n";
				}
			}

			Ajax::respond_with_json( $chapters );
		}

		function validate() {
			$errors = array();

			if ( ! $_POST["source"] )
				return;

			$shownotes = new Model\Shownotes;
			$shownotes->source = $_POST["source"];
			$shownotes->parse();
			$shownotes->validate();

			foreach ($shownotes->shownotes as $shownote ) {
				if ( $shownote->isValid )
					continue;

				$errors[] = array(
						'line' => $shownote->line,
						'type' => 'error',
						'text' => $shownote->errorMessage
					);
			}



			Ajax::respond_with_json( $errors );
		}

		private static function respond_with_json($result) {
			header( 'Cache-Control: no-cache, must-revalidate' );
			header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
			header( 'Content-type: application/json' );
			echo json_encode($result);
			die();
		}
	}
?>