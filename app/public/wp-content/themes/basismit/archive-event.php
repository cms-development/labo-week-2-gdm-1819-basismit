<?php get_header(); ?>
<main class="container">
    <div class="row">
        <div class="col s8">
            <div class="content card">
                <div id="map" style="width: 100%; height: 400px"></div>
                <script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
                <script>
                    var map = L.map('map', {
                        center: [51.0543, 3.7174],
                        zoom: 13
                    });
                    mapLink =
                        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
                    L.tileLayer(
                        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; ' + mapLink + ' Contributors',
                            maxZoom: 18,
                        }).addTo(map);
                        <?php if(have_posts()) : while (have_posts()) : the_post();
                        ?>
                        console.log("<?php get_field('location', false, false)?>");
                        L.marker([51.0543, 3.7174], {title: "<?php the_title();?>", alt: "<?php echo get_permalink();?>"}, ).addTo(map).on('click', onClick);
                        <?php endwhile;
                            else : 
                            endif; 
                            wp_reset_postdata(); 
                        ?>
                        function onClick(e) {
                            window.location.href = e.target.options.alt;
                        }
                </script>
                <!-- <div>
                    <h3 style="padding-left: 20px; margin:0;"> 
                        <?php echo _e('Events:');?>
                    </h3>
                    <ul class="collection">
                        <?php if(have_posts()) : while (have_posts()) : the_post();?>
                        <li class="collection-item">
                            <?php the_title( '<h5><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' );?>
                            <?php the_content('<p>','</p>'); ?>
                        </li>
                        <?php endwhile;
                            else : 
                            endif; 
                            wp_reset_postdata(); 
                        ?>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="col s4">
            <div class="side card">
                <div class="card-content">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>