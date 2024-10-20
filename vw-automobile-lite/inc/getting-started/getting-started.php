<?php
add_action( 'admin_menu', 'vw_automobile_lite_gettingstarted' );
function vw_automobile_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Automobile Theme', 'vw-automobile-lite'), esc_html__('Theme Demo Importer', 'vw-automobile-lite'), 'edit_theme_options', 'vw_automobile_lite_guide', 'vw_automobile_lite_mostrar_guide');   
}

function vw_automobile_lite_admin_theme_style() {
   wp_enqueue_style('vw-automobile-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('vw-automobile-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_automobile_lite_admin_theme_style');

function vw_automobile_lite_mostrar_guide() { 
	$return = add_query_arg( array()) ;
	$vw_automobile_lite_theme = wp_get_theme( 'vw-automobile-lite' );
?>

<div class="wrapper-info">
    <div class="tab-sec">
		<div class="tab">
		   <div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-automobile-lite' ); ?></h3>
				<?php
					/* Get Started. */
					require get_parent_theme_file_path( '/inc/getting-started/demo-content.php');
					?>
			</div>
			<button role="tab" class="tablinks home" onclick="vw_automobile_lite_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'vw-automobile-lite' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="vw_automobile_lite_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'vw-automobile-lite' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="vw_automobile_lite_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'vw-automobile-lite' ); ?></button>
		</div>

		<div  id="tc_index" class="tabcontent open">
			<h2><?php esc_html_e( 'Welcome to VW Automobile Lite WordPress Theme', 'vw-automobile-lite' ); ?> <span class="version">Version: <?php echo esc_html($vw_automobile_lite_theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-automobile-lite' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-automobile-lite'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( VW_AUTOMOBILE_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-automobile-lite'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
			<P><?php esc_html_e( 'Our Automobile WordPress Theme is designed to be stylish and classy, much like all our beloved cars. This exclusive theme is developed especially for car dealership, motorhome, travel trailer, lifts, tractors, car dealers, car resellers, mechanic workshop, auto motor retailers forklift, campers, lift trucks, snow motorcycle, motorbike, car booking, rent a car, rent bike, selling, truck rental, Start a trucking haulage business, tow truck business, freight sevice, commute service, Windshield Repairing, Headlight Restoration, auto parts store, car repair shop, tyre services, engine maintenance, towing services, auto mechanic firm, collision center, CAR AC Repair, Wheel alignment services, vehicle maintenance, agriculture equipment and even aircrafts, jets, side-by-side, ATV, utilities ATV, serviceman, automotive, car dealership, vehicle sales, auto repair, showroom, RVs helicopters, turboprops, charter, taxi cab ompany, food truck, After Market Car Parts, bus shuttle service, airplanes, car washing, car rental, buses, car service, Car AMC, Auto Detail Servicing, car accessories store, car sale, auto mechanical workshops, Auto mechanic, car wash, auto painting and Aerotrader businesses. We aid this multi-purpose responsive theme while keeping the motor-heads in mind and what will appeal to the people the most. Our WordPress theme makes the use of secure and clean codes, you can easily customize our theme as per your wishes. You can even add or remove anything that you may or may not like. With ample of personalization options and features like optimized codes, call to action button (CTA), beautiful banners, lock Editor Styles, global font and color controls Gutenberg compatible, useful shortcodes, numerous styling options, it is the best professional WordPress theme to grab. You will get an interactive demo, responsive slider, multiple post formats, quick page speed, display options, SEO friendly features, Block Editor Styles, social media icons, and a bunch of other phenomenal features with this supreme theme. Furthermore, built on Bootstrap framework, the theme will ease the web development. No matter what kind of automobile industry or services you offer, our Automobile theme is made for the gear-heads like you. Whether you sell used car, deal in motorbikes, motorcycles, small cars, trucks, car rental, bus service, scooters, snowmobile, cab service, automobile blogger, own a car review website, run a garage, repair service, own a showroom, run a driving school and etc. this highly interactive, WooCommerce compatible, user-friendly, Four Columns layout and multipurpose ecommerce theme will fit perfectly for you. All your long research and time invested in finding the best themes end with us, as we bring you a theme like no other. Our Free Automobile WordPress Theme is fresh, special and distinct in every aspect. It guarantees to give your website a professional look which you desperately wanted.', 'vw-automobile-lite' ); ?></P></div>
    	</div>


		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e('VW Automobile Lite Theme Information', 'vw-automobile-lite' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/Automobile-Responsive.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'vw-automobile-lite' ); ?></a></p>
				<p><a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'vw-automobile-lite' ); ?></a></p>
				<p><a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'vw-automobile-lite' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'VW Automobile Lite Pro Theme', 'vw-automobile-lite' ); ?></h4>
				<P><?php esc_html_e( 'This spectacular premium Automobile WordPress Theme is made for the motor-heads. We have created our Automobile themes Stunning design with respect to the automotive industry. The frenzy for keeping our cars immaculate and shiny is well known. We assure you that it will be well reflected in our theme. As they are made with utilizing clean coding standards and it will function well with current WordPress version. It is built on the foundation of being responsive & user-friendly. This allows it to function at its optimal best across all platforms. This takes care of all the visitors and users, regardless of the source of traffic is being driven from.', 'vw-automobile-lite' ); ?></P>
			</div>
			<div class="col-pro-6">
				<h4><?php esc_html_e( 'Theme Features', 'vw-automobile-lite' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Customization', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Responsive Design', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Logo Upload', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Social Media Links', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Slider Settings', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Number of Slides', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Template Pages', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Home Page Template', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Theme sections', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Contact us Page Template', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Blog Templates & Layout', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Page Templates & Layout', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Color Pallete For Particular Sections ', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Global Color Option', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Section Reordering', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Demo Importer', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logoo', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Enable Disable Options On All Sections, Logo', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Full Documentation', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Latest WordPress Compatibility', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Woo-Commerce Compatibility', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Support 3rd Party Plugins', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Secure and Optimized Code', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Exclusive Functionalities', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Section Enable / Disable', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Section Google Font Choices', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Gallery', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Simple & Mega Menu Option', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Support to add custom CSS / JS', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Shortcodes', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Custom Background, Colors, Header, Logo & Menu', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Premium Membership', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Budget Friendly Value', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Priority Error Fixing, Colors, Header, Logo & Menu', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Custom Feature Addition', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'All Access Theme Pass', 'vw-automobile-lite' ); ?></li>
					<li><?php esc_html_e( 'Seamless Customer Support, Colors, Header, Logo & Menu', 'vw-automobile-lite' ); ?></li>
				</ul>
			</div>
		</div>

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'vw-automobile-lite' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'vw-automobile-lite' ); ?></h4>
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'vw-automobile-lite' ); ?></P>
					<a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'vw-automobile-lite' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">
				<h4><?php esc_html_e('Reviews', 'vw-automobile-lite'); ?></h4>
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'vw-automobile-lite' ); ?></P>
					<a href="<?php echo esc_url( VW_AUTOMOBILE_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-automobile-lite'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>