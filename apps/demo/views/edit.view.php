<?php defined('_EXE') or die('Restricted access'); ?>

<h1>
	<span class="glyphicon glyphicon-star"></span>
	<?=Registry::translate("VIEW_DEMO_TITLE");?>
	<small>
		<?=$demo->id ? Registry::translate("VIEW_DEMO_SUBTITLE_EDIT") : Registry::translate("VIEW_DEMO_SUBTITLE_NEW");?>
	</small>
</h1>

<div class="main">
	<form method="post" id="mainForm" action="<?=Url::site();?>" class="form-horizontal ajax" role="form" autocomplete="off">
		<input type="hidden" name="app" id="app" value="demo">
		<input type="hidden" name="action" id="action" value="save">
		<input type="hidden" name="id" value="<?=$demo->id?>">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?=Registry::translate("VIEW_DEMO_PANEL_DEMO_TITLE");?>
					</div>
				  	<div class="panel-body">
				  		<!-- String -->
				    	<div class="form-group">
							<label for="string" class="col-sm-2 control-label">
								<?=Registry::translate("VIEW_DEMO_FIELDS_STRING");?>
							</label>
							<div class="col-sm-10">
								<input type="text" id="string" name="string" class="form-control" value="<?=Helper::sanitize($demo->string);?>">
							</div>
						</div>
						<!-- Buttons -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<?php if($demo->id){ ?>
									<button class="btn btn-danger ladda-label ladda-button delete" data-style="slide-left" confirm="<?=Registry::translate("VIEW_DEMO_CONFIRM_DELETE")?>">
										<span class="ladda-label">
											<?=Registry::translate("BTN_DELETE");?>
										</span>
									</button>
								<?php } ?>
								<a class="btn btn-default ladda-label ladda-button" data-spinner-color="#000" data-style="slide-left" href="<?=Url::site("demo");?>">
									<span class="ladda-label">
										<?=Registry::translate("BTN_CANCEL");?>
									</span>
								</a>
								<button class="btn btn-primary ladda-label ladda-button" data-style="slide-left">
									<span class="ladda-label">
										<?=$demo->id ? Registry::translate("BTN_SAVE") : Registry::translate("BTN_NEW");?>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>