<?php

/**
 * Template Name: Newsletter Test (Inline Styles Only)
 *
 * @author: Devian Kapp
 *
 */

$main_args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => 1

);

$main_post = new WP_Query($main_args);

$sec_args = array(
	'post_type' 		=> 'post',
	'post_status'		=> 'publish',
	'posts_per_page'	=> 5,
	'offset'			=> 1
);

$sec_articles = new WP_Query($sec_args);

$social_icons = array(

	'twitter'	=> array(
		'link'	=>	'https://twitter.com/newsletter/',
		'icon'	=> 'twitter'
	),

	'facebook'	=> array(
		'link'	=>	'https://facebook.com/newsletter/',
		'icon'	=> 'facebook'
	)

);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Newsletter </title>
        <style type="text/css">
        .mj-colmun-per-50{
            border:0;
            display:block;
            outline:none;
            text-decoration:none;
            height:auto;
            width:100%;
			
            padding: 0px 10px 20px 20px;
            float: left;
           
        }
        .article-image{           
                    
			display: table-cell;
			margin: 0px 10px 0px 20px;  
			height:auto;
                    
        }
					
			
		
        .article-content{
            width:100%; 
            /* padding: 0 20px 10px; */
        }
        body{
                    max-width:50%;
                    margin: 0 auto;
                }
			@media screen and (max-width: 650px) { 
			.responsive tr {
			display:block; 
			}
			.responsive td { 
			display:block;
			position:relative; 
			Display:contents;            
			Padding: 20px auto;
            width:50%;
			}
				.responsive .article-image {
					display:block;
					border:0;
					outline:none;
					text-decoration:none;                   
					width: 250px;
					height: 150px;
                   
                   
				}
                .mj-colmun-per-50{
            border:0;
            display:block;
            outline:none;
            text-decoration:none;
            height:auto;
            width:100%;
            margin: 0;
            }
                body{
                    max-width:100%;
                }
                p{
                    text-align: justify;
                    padding: 0 30px;

                }
                .link-title{
                    padding: 0 30px;
					/* margin-right:20px; */
                    
                }
				/* .additional-excerpt {
					margin-right: 20px;
				} */
                .fcompany{
                    padding: 0 20px;
                }
			}
		</style>
	</head>
	<body style="font-family: Verdana,Geneva,sans-serif; color:black;">
		<div class="outer-wrapper" style="margin: 20px auto;border: 1px solid #E0E4E8;">
			<header>
					<span></span>
					<div style="display:inline-block;color:#A7ADB5;font-size:12px;padding-left: 20px;">
						<time datetime="2020-01-27T11:52:51-05:00">Jan 27, 2020</time>
					</div>
					<div style="display:inline-block;color:#000000;font-size:16px;padding-left: 15px;">
						<h5 title="Compass - This is what our working lives will look like in 2040">This is what our working lives will look like in 2040</h5>
					</div>
					<div class="header-logo">
						<a href="https://www.newsletter.co.za/">
							<img src="http://fastdev.wpengine.com/wp-content/uploads/2020/02/Fast-Company_SA_BLACK-Logo-FA.jpg" alt="" width="100%" style="text-align:left;display:block;position:relative; right: 0px;">
						</a>
					</div>
			</header>
			
			<?php
				if (have_posts()) : while (have_posts()) : the_post();
					the_content();
				endwhile; endif; wp_reset_postdata();
			?>


			<!----- Featured Content------>
		
				<!-- Closure of featured content wrapper -->

			
			<!----------------------------------------------------------Closure of secondary content wrapper----------------------------------->
					

			<!------------------Additional Content------------------------------>
			<div class="additional-content-wrapper" style="margin-bottom: 25px;">
				<div class="the-additional-content" style="font-size:12px; margin-bottom: 30px;">
					<h3 id="additional-content-heading" style="text-align:center;margin: 20px 0;font-size:24px;">LATEST NEWS</h3>
					<?php if($sec_articles->have_posts()) : while( $sec_articles->have_posts()) : $sec_articles->the_post();
					$thumb_link = get_the_post_thumbnail_url($post, 'thumbnail');
                    ?>
					<!------ Sector(Pulled) Article----->
                    <table class="responsive article-content" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td style="width: 20%;" >
								<!--------------------Article Image------------------------->
								<div class="sec-image-wrapper responsive " style="float:left; margin-right:20px; width:20%;">
									<?php if( has_post_thumbnail()) : ?>
									<a href="<?php the_permalink(); ?>" style="color:black; text-decoration: none; ">
										<img class="article-image" src="<?= $thumb_link; ?>" />
									</a>
								</div>
								<!--------------------End of Article Image------------------------->
							</td>
							<td style="width: 80%;padding-right:20px;">
								<div class="mj-column-per-50 outlook-group-fix" style="display:inline-block;">
									<div class="link-title">                      
										<a href="<?php the_permalink(); ?>" style="color:black; text-decoration:none;">
											<span class="title" style="font-weight:bold;font-size:15px;">
												<?= the_title(); ?>
											</span>
										</a>    
									</div>         
									<div class="serif small-text link-description" style="font-family: Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif; font-size: 14px; line-height: 15px; color: #000000;">
										<a href="<?php the_permalink(); ?>" style="color:black; text-decoration: none;text-align: justify;">
											<div class="additional-excerpt" style="clear:right;">
												<p><?= the_excerpt();  ?></p>
											</div>
										</a>                            
									</div>
									<div class="link-url" style="font-family: Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif;font-size: 11px; line-height: 12px; color: #6d6e71;padding:0px 20px 15px 10px">
										<a class="fcompany" target="_blank" style="text-decoration: none; color: #6d6e71;" href="#">fastcompany.com</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

					<!--------End of Sector(Pulled) Article---->

					<hr style="Margin: 0px 20px 20px 20px;background: #b7b7b7;border: 1px solid #fff;min-height: 1px;">	
                    <?php	endif; ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
				
			</div>
			
			<!----------------- Additional Content Ends-------------------------->		
			


			<!------------------------- Before Footer------------------------------------->

			<div style="margin:0px auto;max-width:600px;">
					<table role="presentation" style="font-size:0px;width:100%;" align="center" border="0">
						<tbody>
							<tr>
								<td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;padding-bottom:30px;" class="indented">
									<div aria-labelledby="mj-column-per-100" class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
										<table role="presentation" width="100%" border="0">
											<tbody>
												<tr>
													<td style="word-break:break-word;font-size:0px;padding:0px;" align="left">
														<div style="cursor:auto;color:#000000;font-family:Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif;font-size:12px;line-height:19px;text-align:left;padding-left:20px">
															<div style="margin: 0; text-align:center;" class="revue-p">Download the Fast Company Magazine app: Available for&nbsp;<a href="https://apps.apple.com/za/app/fast-company-sa/id1108870494" target="_blank" style="color: #00579b;text-decoration:underline;">iOS</a>&nbsp;and&nbsp;<a href="https://play.google.com/store/apps/details?id=com.fastcompany.android" target="_blank" style="color: #00579b;text-decoration:underline;">Android</a>&nbsp;devices</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
			</div>			
			<!-------------------------Before Footer End----------------------->		

			<!-------------------------Footer---------------------------->
			<br><br>
				
			<table role="presentation" cellpadding="0" cellspacing="0" style="background:#000;font-size:0px;width:100%;" border="0" class="footer">
				<tbody>
					<tr>
						<td>
							<div style="margin:0px auto;max-width:600px;">
								<table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
									<tbody>
										<tr>
											<td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;padding-bottom:35px;padding-left:30px;padding-right:30px;padding-top:50px;" class="indented">
												<!--[if mso | IE]>
												<![endif]-->
												<div aria-labelledby="mj-column-per-100" class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
													<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
														<tbody>
															<tr>
																<td style="word-break:break-word;font-size:0px;padding:0px;padding-bottom:40px;" align="center">
																	<table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
																		<tbody>
																			<tr>
																				<td style="width:200px;">
																												<img alt="Fast Company" title="Fast Company" height="30" width="200" style="border:none;border-radius:0;display:block;outline:none;text-decoration:none;width:200px;height:30px;" src="https://s3.amazonaws.com/revue/themes/fastcompany/logo_white.png">
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="word-break:break-word;font-size:0px;padding:0px;padding-bottom:40px;" align="center">
																	<table role="presentation" cellpadding="0" cellspacing="0" border="0">
																		<tbody>
																			<tr>
																				<td style="word-break:break-word;font-size:0px;padding:0px;" align="center" width="40" class="footer-icon">
																					<a style="text-decoration: none;outline: none;" target="_blank" href="https://twitter.com/FastCompanySA">
																						<img alt="" title="" height="30" width="30" style="border:none;border-radius:0;display:inline-block;outline:none;text-decoration:none;width:30px;height:30px;" src="https://s3.amazonaws.com/revue/themes/fastcompany/twitter_white.png">
																					</a> 
																				</td>
																				<td style="word-break:break-word;font-size:0px;padding:0px;" align="center" width="40" class="footer-icon">
																					<a style="text-decoration: none;outline: none;" target="_blank" href="https://www.facebook.com/fastcompanySA/">
																						<img alt="" title="" height="30" width="30" style="border:none;border-radius:0;display:inline-block;outline:none;text-decoration:none;width:30px;height:30px;" src="https://s3.amazonaws.com/revue/themes/fastcompany/facebook_white.png">
																					</a> 
																				</td>
																				<td style="word-break:break-word;font-size:0px;padding:0px;" align="center" width="40" class="footer-icon">
																					<a style="text-decoration: none;outline: none;" target="_blank" href="https://www.instagram.com/fastcompanysa/">
																						<img alt="" title="" height="30" width="30" style="border:none;border-radius:0;display:inline-block;outline:none;text-decoration:none;width:30px;height:30px;" src="https://s3.amazonaws.com/revue/themes/fastcompany/instagram_white.png">
																					</a>       
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="word-break:break-word;font-size:0px;padding:0px;" align="center">
																	<div style="cursor:auto;color:#FFFFFF;font-family:Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif;font-size:12px;line-height:18px;text-align:center;">
																	If you don’t want to receive a Fast Company South Africa Newsletter anymore, <a href="[unsubscribe]" style="color: #FFF;text-decoration:underline;" >unsubscribe here</a>
																	</div>											
																</td>
															</tr>															
															<tr>
																<td style="word-break:break-word;font-size:0px;padding:0px;padding-top: 8px;" align="center">
																	<div style="cursor:auto;color:#FFFFFF;font-family:Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif;font-size:12px;line-height:18px;text-align:center;">
																		<a target="_blank" style="color: #FFF;text-decoration:underline;" href="[webversion]">View this newsletter online</a>
																		<div>
																		</div>
																	</div>
																</td>
															</tr>												
															<tr>
																<td style="word-break:break-word;font-size:0px;padding:0px;padding-top: 16px;" align="center">
																	<div style="cursor:auto;color:#FFFFFF;font-family:Arial, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, sans-serif;font-size:12px;line-height:18px;text-align:center;">10th floor, Convention Towers, Heerengracht Street, Cape Town, 8001</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>		
			<!-------------- End Footer------------>
		</div>
	</body>
</html>
			