<?php
/*
Plugin Name: Flutuante Sindilojas
Description: Adiciona um botão flutuante na página inicial.
Version: 1.0
Author: Rafael Medeiros
Author URI: https://rajo.com.br
*/

// Verifica se o WordPress está acessando o arquivo diretamente.
if (!defined('ABSPATH')) {
    exit;
}

// Adiciona a ação para enfileirar os scripts necessários.
add_action('wp_enqueue_scripts', 'flutante_sindilojas_enqueue_scripts');

// Função para enfileirar scripts e estilos.
function flutante_sindilojas_enqueue_scripts() {
    // Enfileira o CSS e JavaScript apenas se estiver na página inicial.
    if (is_front_page()) {
        wp_enqueue_style('flutante-sindilojas-css', plugins_url('style.css', __FILE__));
        wp_enqueue_script('flutante-sindilojas-js', plugins_url('script.js', __FILE__), array('jquery'), null, true);
    }
}
