<?php

add_filter('ep_instant_results_available', '__return_true');

add_filter('ep_instant_results_search_endpoint', function() {
    return plugin_dir_url(__FILE__) . 'elasticpress-proxy/proxy.php';
});
