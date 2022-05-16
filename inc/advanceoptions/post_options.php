<?php 
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array(
				'0'	=> esc_html__('Default', 'karo')
				);
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

$options[] = array(
				'id'		=> 'post_layout_heading'
				,'label'	=> esc_html__('Post Layout', 'karo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'post_layout'
				,'label'	=> esc_html__('Post Layout', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> esc_html__('Default', 'karo')
									,'0-1-0'  	=> esc_html__('Fullwidth', 'karo')
									,'1-1-0' 	=> esc_html__('Left Sidebar', 'karo')
									,'0-1-1' 	=> esc_html__('Right Sidebar', 'karo')
									,'1-1-1' 	=> esc_html__('Left & Right Sidebar', 'karo')
								)
			);
			
$options[] = array(
				'id'		=> 'post_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'post_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
					'default'  	=> esc_html__('Default', 'karo')
					,'layout1'  		=> esc_html__('Header Layout 1', 'karo')
					,'layout2'  		=> esc_html__('Header Layout 2', 'karo')
					,'layout3'  		=> esc_html__('Header Layout 3', 'karo')
					,'layout4'  		=> esc_html__('Header Layout 4', 'karo')
					,'layout5'  		=> esc_html__('Header Layout 5', 'karo')
					,'layout6'  		=> esc_html__('Header Layout 6', 'karo')
					,'layout7'  		=> esc_html__('Header Layout 7', 'karo')
					,'layout8'  		=> esc_html__('Header Layout 8', 'karo')
					,'layout9'  		=> esc_html__('Header Layout 9', 'karo')
					,'layout10'  		=> esc_html__('Header Layout 10', 'karo')
					,'layout11'  		=> esc_html__('Header Layout 11', 'karo')
					,'layout12'  		=> esc_html__('Header Layout 12', 'karo')
					,'layout13'  		=> esc_html__('Header Layout 13', 'karo')
					,'layout14'  		=> esc_html__('Header Layout 14', 'karo')
				)
			);
	
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'karo')
								,'0'	=> esc_html__('No', 'karo')
								)
			);
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'karo')
								,'0'	=> esc_html__('No', 'karo')
								)
			);			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'karo')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'karo')
									,'breadcrumb-v1'  		=> esc_html__('Breadcrumb Layout 1', 'karo')
									,'breadcrumb-v2' 		=> esc_html__('Breadcrumb Layout 2', 'karo')
									
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'karo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'karo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Logo Mobile', 'karo')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			


				
$options[] = array(
				'id'		=> 'post_audio_heading'
				,'label'	=> esc_html__('Post Audio', 'karo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);	
			
$options[] = array(
				'id'		=> 'audio_url'
				,'label'	=> esc_html__('Audio URL', 'karo')
				,'desc'		=> esc_html__('Enter MP3, OGG, WAV file URL or SoundCloud URL', 'karo')
				,'type'		=> 'text'
			);

$options[] = array(
				'id'		=> 'post_video_heading'
				,'label'	=> esc_html__('Post Video', 'karo')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$options[] = array(
				'id'		=> 'video_url'
				,'label'	=> esc_html__('Video URL', 'karo')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'karo')
				,'type'		=> 'text'
			);			
?>