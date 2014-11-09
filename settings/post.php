<?php

namespace OSFX\Settings;

class Post {
	function save_shownotes( $post_id ) {
		update_post_meta( $post_id, '_shownotes', $_POST['_osfx_shownotes'] );
	}
	
	function shownote_box() {
		global $post;

		add_meta_box(
			'shownotes_meta_field',
			'Shownotes',
			function() use ( $post ) {
				?>
					<div class="wrap">
						<h2 class="nav-tab-wrapper">
							<span data-container="source" class="osfx-tab nav-tab nav-tab-active">Source</span>
							<span data-container="chapters" class="osfx-tab nav-tab" id="osfx-chapters-button">Chapters</span>
						</h2>
						<div id="osfx_tabs_wrapper">
							<div id="osfx_source" class="osfx-tab-container osfx-visible">
								<span id="fullscreen" class="fullscreen-on fullscreen-button"></span>
								<div id="ace-shownotes"></div>
								<textarea class="large-text" name="_osfx_shownotes" id="_osfx_shownotes" style="height: 200px;"><?php echo get_post_meta( $post->ID, '_shownotes' , TRUE); ?></textarea>

								<?php if ( $showpadid = get_option('osfx_showpad') ) : ?>
								<p id="osfx_import_container">
									<select id="importId"></select>
									<input type="button" class="button" 
										onclick="importShownotes(document.getElementById('_osfx_shownotes'), document.getElementById('importId').value, 'http://cdn.simon.waldherr.eu/projects/showpad-api/getPad/?id=$$$')" 
										value="Import from ShowPad" />
									<span id="osfx_validation_status"></span>
								</p>

								<script type="text/javascript">
									var shownotesname = '<?php echo $showpadid; ?>';
									getPadList(document.getElementById('importId'),shownotesname);
								</script>
								<?php endif; ?>
							</div>

							<div id="osfx_chapters"  class="osfx-tab-container">
								<p id="osfx_chapters_paragraph">
									Spinner!
								</p>
								<p>
									<input type="button" class="button"	id="import_into_publisher_button" value="Export to Podlove Publisher" />
								</p>
							</div>
						</div>
					</div>

					<script type="text/javascript">
						var editor = ace.edit("ace-shownotes");
						var textarea = jQuery("#_osfx_shownotes");
						textarea.hide();
						editor.getSession().setUseWrapMode(true);
						editor.setTheme("ace/theme/textmate");
						editor.getSession().setValue(textarea.val());
						editor.getSession().setMode("ace/mode/osf");
						jQuery("#ace-shownotes").css( 'position', 'relative' );
						editor.getSession().on('change', function() {
							textarea.val(editor.getSession().getValue());
							OSFX.getParserResponse('osfx-validate');
						});
						OSFX.getParserResponse('osfx-validate');
					</script>								
				<?php
			},
			'podcast' );
	}
}

?>