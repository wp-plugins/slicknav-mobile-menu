<style>
.myicon:before {
	content: '\f228';
	display: inline-block;
	-webkit-font-smoothing: antialiased;
	font: normal 32px/1 'dashicons';
	vertical-align: top;
	margin-right: 10px;
}
</style>

<h3><?php esc_attr_e( 'SlickNav Mobile Menu Options', 'slicknav-mobile-menu' ); ?></h3>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2 class="myicon"><?php esc_attr_e( 'Mobile Menu', 'slicknav-mobile-menu' ); ?></h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h3><span><?php esc_attr_e( 'Enter your menu CSS selector for the Mobile Menu name value, for example; #primary-menu or #menu-primary-menu etc.', 'slicknav-mobile-menu' ); ?></span></h3>

						<div class="inside">
						<?php if( !isset( $ng_slicknav_menu ) || $ng_slicknav_menu == ''): ?>

						<form name="ng_slicknav_menu_form" method="post" action="">

								<input type="hidden" name="ng_slicknav_form_submitted" value="Y">

							<table class="form-table">
									<tr>
										<td><label for="ng_slicknav_menu"><?php esc_attr_e( 'SlickNav Mobile Menu Name', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_menu" id="ng_slicknav_menu" type="text" value="" class="regular-text" placeholder="<?php esc_attr_e('CSS Selector Menu Name', 'slicknav-mobile-menu'); ?>" /></td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_width"><?php esc_attr_e( 'Maximum width to use SlickNav (600px Default)', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_width" id="ng_slicknav_width" type="number" value="600" class="regular-text" placeholder="600" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_background"><?php esc_attr_e( 'Menu Background Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_background" id="ng_slicknav_background" type="text" value="#4c4c4c" class="my-color-field" placeholder="#4c4c4c" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_button"><?php esc_attr_e( 'Menu Button Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_button" id="ng_slicknav_button" type="text" value="#222222" class="my-color-field" placeholder="#222222" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_label_color"><?php esc_attr_e( 'Menu Label Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_label_color" id="ng_slicknav_label_color" type="text" value="#fff" class="my-color-field" placeholder="#fff" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_icon_color"><?php esc_attr_e( 'Menu Icon Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_icon_color" id="ng_slicknav_icon_color" type="text" value="#fff" class="my-color-field" placeholder="#fff" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_label_shadow"><?php esc_attr_e( 'Menu Label Shadow', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_label_shadow" id="ng_slicknav_label_shadow">
											<option selected="selected" value="0 1px 3px #000"><?php esc_attr_e( 'On', 'slicknav-mobile-menu' ); ?></option>
											<option value="none"><?php esc_attr_e( 'Off', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_icon_shadow"><?php esc_attr_e( 'Menu Icon Shadow', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_icon_shadow" id="ng_slicknav_icon_shadow">
											<option selected="selected" value="0 1px 0 rgba(0,0,0,0.25)"><?php esc_attr_e( 'On', 'slicknav-mobile-menu' ); ?></option>
											<option value="none"><?php esc_attr_e( 'Off', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_link_color"><?php esc_attr_e( 'Menu Link Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_link_color" id="ng_slicknav_link_color" type="text" value="#fff" class="my-color-field" placeholder="#fff" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_link_hover_color"><?php esc_attr_e( 'Menu Link Hover Color', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_link_hover_color" id="ng_slicknav_link_hover_color" type="text" value="#ccc" class="my-color-field" placeholder="#ccc" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_link_hover_color_submenu"><?php esc_attr_e( 'Menu Link Hover Color, Containing SubMenus', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_link_hover_color_submenu" id="ng_slicknav_link_hover_color_submenu" type="text" value="#ccc" class="my-color-field" placeholder="#ccc" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_button_position"><?php esc_attr_e( 'Menu Button Position', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_button_position" id="ng_slicknav_button_position">
											<option selected="selected" value="right"><?php esc_attr_e( 'Right', 'slicknav-mobile-menu' ); ?></option>
											<option value="left"><?php esc_attr_e( 'Left', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_font"><?php esc_attr_e( 'Menu Font Size (16px Default)', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_font" id="ng_slicknav_font" type="number" value="16" class="regular-text" placeholder="16" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_label_size"><?php esc_attr_e( 'Menu Label Size (16px Default)', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_label_size" id="ng_slicknav_label_size" type="number" value="16" class="regular-text" placeholder="16'" /></td>										
									</tr>
									<tr>
									<td><label for="ng_slicknav_label_weight"><?php esc_attr_e( 'Menu Label Weight', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_label_weight" id="ng_slicknav_label_weight">
										<option  value="normal"><?php esc_attr_e( 'Normal', 'slicknav-mobile-menu' ); ?></option>
										<option  selected="selected" value="bold" ><?php esc_attr_e( 'Bold', 'slicknav-mobile-menu' ); ?></option>
										</select>
									</td>
								</tr>
									<tr>
										<td><label for="ng_slicknav_font_case"><?php esc_attr_e( 'Menu link font case', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_font_case" id="ng_slicknav_font_case">
											<option selected="selected" value="none"><?php esc_attr_e( 'None', 'slicknav-mobile-menu' ); ?></option>
											<option value="capitalize"><?php esc_attr_e( 'Capitalize', 'slicknav-mobile-menu' ); ?></option>
											<option value="lowercase"><?php esc_attr_e( 'Lowercase', 'slicknav-mobile-menu' ); ?></option>
											<option value="uppercase"><?php esc_attr_e( 'Uppercase', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
									</tr>		
									<tr>
										<td><label for="ng_slicknav_submenu_position"><?php esc_attr_e( 'SubMenu Button Indicator', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_submenu_position" id="ng_slicknav_submenu_position">
											<option selected="selected" value="none"><?php esc_attr_e( 'Left', 'slicknav-mobile-menu' ); ?></option>
											<option value="right"><?php esc_attr_e( 'Right', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_position"><?php esc_attr_e( 'Menu Position (body by default, using body puts the Menu at the top.', 'slicknav-mobile-menu' ); ?><br>
										<?php esc_attr_e( 'However you can adjust this location by adding in a CSS class', 'slicknav-mobile-menu' ); ?></label></td>										
										<td><input name="ng_slicknav_position" id="ng_slicknav_position" type="text" value="body" class="regular-text"  placeholder="body"/></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_label"><?php esc_attr_e( 'Menu Label ("MENU" by default, leave blank for no label and just the symbol)', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_label" id="ng_slicknav_label" type="text" value="MENU" class="regular-text" placeholder="MENU" /></td>										
									</tr>
									<tr>
										<td><label for="ng_slicknav_parent_links"><?php esc_attr_e( 'Allow Parent Links', 'slicknav-mobile-menu' ); ?></label></td>
										<td>
											<label for="ng_slicknav_parent_links">
											<input name="ng_slicknav_parent_links" type="checkbox" id="ng_slicknav_parent_links" value="1" checked />
											<span><?php esc_attr_e( 'Allow Parent Links', 'slicknav-mobile-menu' ); ?></span>
											</label>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_child_links"><?php esc_attr_e( 'Show Child Links on Open', 'slicknav-mobile-menu' ); ?></label></td>
										<td>
											<label for="ng_slicknav_child_links">	
											<input name="ng_slicknav_child_links" type="checkbox" id="ng_slicknav_child_linkss" value="1" />
											<span><?php esc_attr_e( 'Show Child Links on Open', 'slicknav-mobile-menu' ); ?></span>
											</label>
										</td>
									</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_fixhead"><?php esc_attr_e( 'Fix Menu to Head', 'slicknav-mobile-menu' ); ?></label></td>
										<td>
											<label for="ng_slicknav_fixhead">	
											<input name="ng_slicknav_fixhead" type="checkbox" id="ng_slicknav_fixhead" value="1" />
											<span><?php esc_attr_e( 'Fix Menu to Head', 'slicknav-mobile-menu' ); ?></span>
											</label>
										</td>
									</tr>
									<tr>
										<td><label for="ng_slicknav_brand"><?php esc_attr_e( 'Menu logo, enter a URL or upload an image for a logo, smaller is better here, like 40px in depth and up to 140px in width', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_brand" id="ng_slicknav_brand" type="text" class="regular-text" value="http://"  /></td>	
										<td><input id="upload_image_button" type="button" value="Upload Image" class="button-secondary" /></td>									
									</tr>
									<tr>
										<td><label for="ng_slicknav_speed"><?php esc_attr_e( 'Speed of Menu open/close (Higher numbers are slower)', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_speed" id="ng_slicknav_speed">
											<option value="200">200</option>
											<option selected="selected" value="400">400</option>
											<option value="600">600</option>
											<option value="800">800</option>
											<option value="1000">1000</option>
											<option value="2000">2000</option>
											</select>
										</td>
									</tr>																				
							</table>
							<p><input class="button-primary" type="submit" name="ng_slicknav_menu_submit" value="<?php esc_attr_e ('Save', 'slicknav-mobile-menu'); ?>" /></p>
								
						</form>
						<?php endif; ?>
						<?php if( isset( $ng_slicknav_menu ) && $ng_slicknav_menu !== ''): ?>
						<form name="ng_slicknav_menu_form" method="post" action="">

							<input type="hidden" name="ng_slicknav_form_submitted" value="Y">

						<table class="form-table">
								<tr>
									<td><label for="ng_slicknav_menu"><?php esc_attr_e( 'SlickNav Mobile Menu Name', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_menu" id="ng_slicknav_menu" type="text" value="<?php echo ($ng_slicknav_menu); ?>" class="regular-text" placeholder="<?php esc_attr_e('CSS Selector Menu Name', 'slicknav-mobile-menu'); ?>"/></td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_width"><?php esc_attr_e( 'Maximum Width to use SlickNav (600px Default)', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_width" id="ng_slicknav_width" type="number" value="<?php echo ($ng_slicknav_width ); ?>" class="regular-text" placeholder="600" /></td>									
								</tr>
								<tr>
									<td><label for="ng_slicknav_background"><?php esc_attr_e( 'Menu Background Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_background" id="ng_slicknav_background" type="text" value="<?php echo ( $ng_slicknav_background ); ?>" class="my-color-field" placeholder="#4c4c4c" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_button"><?php esc_attr_e( 'Menu Button Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_button" id="ng_slicknav_button" type="text" value="<?php echo ( $ng_slicknav_button); ?>" class="my-color-field" placeholder="#222" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_label_color"><?php esc_attr_e( 'Menu Label Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_label_color" id="ng_slicknav_label_color" type="text" value="<?php echo ( $ng_slicknav_label_color); ?>" class="my-color-field" placeholder="#fff" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_icon_color"><?php esc_attr_e( 'Menu Icon Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_icon_color" id="ng_slicknav_icon_color" type="text" value="<?php echo ( $ng_slicknav_icon_color); ?>" class="my-color-field" placeholder="#fff" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_label_shadow"><?php esc_attr_e( 'Menu Label Shadow', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_label_shadow" id="ng_slicknav_label_shadow">
										<option value="0 1px 3px #000"  <?php selected($options['ng_slicknav_label_shadow'], '0 1px 3px #000' ); ?>><?php esc_attr_e( 'On', 'slicknav-mobile-menu' ); ?></option>
										<option value="none"  <?php selected($options['ng_slicknav_label_shadow'], 'none' ); ?>><?php esc_attr_e( 'Off', 'slicknav-mobile-menu' ); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_icon_shadow"><?php esc_attr_e( 'Menu Icon Shadow', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_icon_shadow" id="ng_slicknav_icon_shadow">
										<option value="0 1px 0 rgba(0,0,0,0.25)" <?php selected($options['ng_slicknav_icon_shadow'], '0 1px 0 rgba(0,0,0,0.25)' ); ?>><?php esc_attr_e( 'On', 'slicknav-mobile-menu' ); ?></option>
										<option value="none" <?php selected($options['ng_slicknav_icon_shadow'], 'none' ); ?>><?php esc_attr_e( 'Off', 'slicknav-mobile-menu' ); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_link_color"><?php esc_attr_e( 'Menu Link Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_link_color" id="ng_slicknav_link_color" type="text" value="<?php echo ( $ng_slicknav_link_color); ?>" class="my-color-field" placeholder="#fff" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_link_hover_color"><?php esc_attr_e( 'Menu Link Hover Color', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_link_hover_color" id="ng_slicknav_link_hover_color" type="text" value="<?php echo esc_attr( $ng_slicknav_link_hover_color); ?>" class="my-color-field" placeholder="#ccc" /></td>										
								</tr>
								<tr>
										<td><label for="ng_slicknav_link_hover_color_submenu"><?php esc_attr_e( 'Menu Link Hover Color, Containing SubMenus', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_link_hover_color_submenu" id="ng_slicknav_link_hover_color_submenu" type="text" value="<?php echo esc_attr( $ng_slicknav_link_hover_color_submenu); ?>" class="my-color-field" placeholder="#ccc" /></td>										
									</tr>
								<tr>
									<td><label for="ng_slicknav_button_position"><?php esc_attr_e( 'Menu Button Position', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_button_position" id="ng_slicknav_button_position">
										
										<option  value="right" <?php selected($options['ng_slicknav_button_position'], 'right' ); ?>><?php esc_attr_e( 'Right', 'slicknav-mobile-menu' ); ?></option>
										<option  value="left" <?php selected($options['ng_slicknav_button_position'], 'left' ); ?>><?php esc_attr_e( 'Left', 'slicknav-mobile-menu' ); ?></option>

										</select>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_font"><?php esc_attr_e( 'Menu Font Size (16px Default)', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_font" id="ng_slicknav_font" type="number" value="<?php echo ($ng_slicknav_font); ?>" class="regular-text" placeholder="16"/></td>										
								</tr>
								<tr>
										<td><label for="ng_slicknav_label_size"><?php esc_attr_e( 'Menu Label Size (16px Default)', 'slicknav-mobile-menu' ); ?></label></td>
										<td><input name="ng_slicknav_label_size" id="ng_slicknav_label_size" type="number" value="<?php echo ($ng_slicknav_label_size); ?>" class="regular-text" placeholder="16" /></td>										
								</tr>
								<tr>
										<td><label for="ng_slicknav_label_weight"><?php esc_attr_e( 'Menu Label Weight', 'slicknav-mobile-menu' ); ?></label></td>
										<td>	
											<select name="ng_slicknav_label_weight" id="ng_slicknav_label_weight">
											<option  value="normal" <?php selected($options['ng_slicknav_label_weight'], 'normal' ); ?>><?php esc_attr_e( 'Normal', 'slicknav-mobile-menu' ); ?></option>
											<option  value="bold'" <?php selected($options['ng_slicknav_label_weight'], 'bold' ); ?>><?php esc_attr_e( 'Bold', 'slicknav-mobile-menu' ); ?></option>
											</select>
										</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_font_case"><?php esc_attr_e( 'Menu link font case', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_font_case" id="ng_slicknav_font_case">
										<option selected="selected" value="none" <?php selected($options['ng_slicknav_font_case'], 'none' ); ?>><?php esc_attr_e( 'None', 'slicknav-mobile-menu' ); ?></option>
										<option value="capitalize" <?php selected($options['ng_slicknav_font_case'], 'capitalize' ); ?>><?php esc_attr_e( 'Capitalize', 'slicknav-mobile-menu' ); ?></option>
										<option value="lowercase" <?php selected($options['ng_slicknav_font_case'], 'lowercase' ); ?>><?php esc_attr_e( 'Lowercase', 'slicknav-mobile-menu' ); ?></option>
										<option value="uppercase" <?php selected($options['ng_slicknav_font_case'], 'uppercase' ); ?>><?php esc_attr_e( 'Uppercase', 'slicknav-mobile-menu' ); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_submenu_position"><?php esc_attr_e( 'SubMenu Button Indicator', 'slicknav-mobile-menu' ); ?></label></td>
									<td>	
										<select name="ng_slicknav_submenu_position" id="ng_slicknav_submenu_position">
										<option value="right" <?php selected($options['ng_slicknav_submenu_position'], 'right' ); ?>><?php esc_attr_e( 'Right', 'slicknav-mobile-menu' ); ?></option>
										<option value="none" <?php selected($options['ng_slicknav_submenu_position'], 'none' ); ?>><?php esc_attr_e( 'None', 'slicknav-mobile-menu' ); ?></option>
										</select>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_position"><?php esc_attr_e( 'Menu Position (body by default, using body puts the Menu at the top.', 'slicknav-mobile-menu' ); ?><br>
									<?php esc_attr_e( 'However you can adjust this location by adding in a CSS class', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_position" id="ng_slicknav_position" type="text" value="<?php echo ( $ng_slicknav_position); ?>" class="regular-text" placeholder="<?php echo ('body'); ?>" /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_label"><?php esc_attr_e( 'Menu Label ("MENU" by default, leave blank for no label and just the symbol)', 'slicknav-mobile-menu' ); ?></label></td>
									<td><input name="ng_slicknav_label" id="ng_slicknav_label" type="text" value="<?php echo ($ng_slicknav_label); ?>" class="regular-text" placeholder="<?php echo ('MENU'); ?>"  /></td>										
								</tr>
								<tr>
									<td><label for="ng_slicknav_parent_links"><?php esc_attr_e( 'Allow Parent Links', 'slicknav-mobile-menu' ); ?></label></td>
									<td>
										<label for="ng_slicknav_parent_links">
											<input name="ng_slicknav_parent_links" type="checkbox" id="ng_slicknav_parent_links" value="1" <?php checked($options['ng_slicknav_parent_links'],'1'); ?> />
											<span><?php esc_attr_e( 'Allow Parent Links', 'slicknav-mobile-menu' ); ?></span>
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label for="ng_slicknav_child_links"><?php esc_attr_e( 'Show Child Links on Open', 'slicknav-mobile-menu' ); ?></label></td>
									<td>
										<label for="ng_slicknav_child_links">
											<input name="ng_slicknav_child_links" type="checkbox" id="ng_slicknav_child_links" value="1" <?php checked($options['ng_slicknav_child_links'],'1'); ?> />
											<span><?php esc_attr_e( 'Show Child Links on Open', 'slicknav-mobile-menu' ); ?></span>
										</label>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_fixhead"><?php esc_attr_e( 'Sticky Menu to Head', 'slicknav-mobile-menu' ); ?></label></td>
									<td>
										<label for="ng_slicknav_fixhead">	
										<input name="ng_slicknav_fixhead" type="checkbox" id="ng_slicknav_fixhead" value="1" <?php checked($options['ng_slicknav_fixhead'],'1'); ?>/>
										<span><?php esc_attr_e( 'Stick Menu to Head', 'slicknav-mobile-menu' ); ?></span>
										</label>
									</td>
								</tr>
								<tr>
									<td><label for="ng_slicknav_brand"><?php esc_attr_e( 'Menu logo, enter a URL or upload an image for a logo, smaller is better here, like 40px in depth and up to 140px in width' ); ?></label></td>
									<td><input name="ng_slicknav_brand" id="ng_slicknav_brand" type="text" class="regular-text" value="<?php echo ($ng_slicknav_brand); ?>"  /></td>	
									<td><input id="upload_image_button" type="button" value="Upload Image" class="button-secondary" /></td>									
									</tr>
								<tr>
									<td><label for="ng_slicknav_speed"><?php esc_attr_e( 'Speed of Menu open/close (Lower numbers are faster)', 'slicknav-mobile-menu' ); ?></label></td>
									<td>
										<select name="ng_slicknav_speed" id="ng_slicknav_speed">
										<option value="200" <?php selected($options['ng_slicknav_speed'], '200'); ?>>200</option>
										<option value="400" <?php selected($options['ng_slicknav_speed'], '400'); ?>>400</option>
										<option value="600" <?php selected($options['ng_slicknav_speed'], '600'); ?>>600</option>
										<option value="800" <?php selected($options['ng_slicknav_speed'], '800'); ?>>800</option>
										<option value="1000" <?php selected($options['ng_slicknav_speed'], '1000'); ?>>1000</option>
										<option value="2000" <?php selected($options['ng_slicknav_speed'], '2000'); ?>>2000</option>
										</select>
									</td>
								</tr>											
						</table>
						<p><input class="button-primary" type="submit" name="ng_slicknav_menu_submit" value="<?php esc_attr_e( 'Update', 'slicknav-mobile-menu'); ?>" /></p>
							
					<div class="updated"><p><?php esc_attr_e( 'Settings Updated', 'wp_admin_style' ); ?></p></div>
					

					</form>
					<?php endif; ?>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h3><span><?php esc_attr_e('Additional Resources', 'slicknav-mobile-menu'); ?></span></h3>

						<div class="inside">
							<p><?php esc_attr_e('More Slick Nav Info...','slicknav-mobile-menu'); ?></p>
							<ul>
								<li><a href="http://slicknav.com/" rel="nofollow"><?php esc_attr_e('SlickNav Home','slicknav-mobile-menu'); ?></a></li>
								<li><a href="https://github.com/ComputerWolf/SlickNav" rel="nofollow"><?php esc_attr_e('SlickNav GitHub','slicknav-mobile-menu'); ?></a></li>
								<li><a href="http://wpbeaches.com/using-slick-responsive-menus-genesis-child-theme/" rel="nofollow"><?php esc_attr_e('WP Beaches Genesis Guide','slicknav-mobile-menu'); ?></a></li>
								<li><a href="http://wpbeaches.com/swap-wordpress-twenty-twelve-mobile-menu-slick-navigation/" rel="nofollow"><?php esc_attr_e('WP Beaches TwentyTwelve Guide','slicknav-mobile-menu'); ?></a></li>
							</ul>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->