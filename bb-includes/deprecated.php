<?php
function bb_specialchars( $text, $quotes = 0 ) {
	return wp_specialchars( $text, $quotes );
}

function bb_make_clickable( $ret ) {
	return make_clickable( $ret );
}

function bb_apply_filters($tag, $string, $filter = true) {
	$args = func_get_args();
	return call_user_func_array('apply_filters', $args);
}

function bb_add_filter($tag, $function_to_add, $priority = 10) {
	$args = func_get_args();
	return call_user_func_array('add_filter', $args);
}

function bb_remove_filter($tag, $function_to_remove, $priority = 10) {
	$args = func_get_args();
	return call_user_func_array('remove_filter', $args);
}

function bb_do_action($tag) {
	$args = func_get_args();
	return call_user_func_array('do_action', $args);
}

function bb_add_action($tag, $function_to_add, $priority = 10) {
	$args = func_get_args();
	return call_user_func_array('add_action', $args);
}

function bb_remove_action($tag, $function_to_remove, $priority = 10) {
	$args = func_get_args();
	return call_user_func_array('remove_action', $args);
}

function bb_add_query_arg() {
	$args = func_get_args();
	return call_user_func_array('add_query_arg', $args);
}

function bb_remove_query_arg($key, $query = '') {
	return remove_query_arg($key, $query);
}

if ( !function_exists('language_attributes') ) :
function language_attributes( $xhtml = 0 ) {
	bb_language_attributes( $xhtml );
}
endif;

function cast_meta_value( $data ) {
	return bb_maybe_unserialize( $data );
}

function option( $option ) {
	return bb_option( $option );
}

// Use topic_time
function topic_date( $format = '', $id = 0 ) {
	echo gmdate( $format, get_topic_timestamp( $id ) );
}
function get_topic_date( $format = '', $id = 0 ){
	return gmdate( $format, get_topic_timestamp( $id ) );
}
function get_topic_timestamp( $id = 0 ) {
	global $topic;
	if ( $id )
		$topic = get_topic( $id );
	return bb_gmtstrtotime( $topic->topic_time );
}

// Use topic_start_time
function topic_start_date( $format = '', $id = 0 ) {
	echo gmdate( $format, get_topic_start_timestamp( $id ) );
}
function get_topic_start_timestamp( $id = 0 ) {
	global $topic;
	if ( $id )
		$topic = get_topic( $id );
	return bb_gmtstrtotime( $topic->topic_start_time );
}

// Use bb_post_time
function post_date( $format ) {
	echo gmdate( $format, get_post_timestamp() );
}
function get_post_timestamp() {
	global $bb_post;
	return bb_gmtstrtotime( $bb_post->post_time );
}

function get_inception() {
	return bb_get_inception( 'timestamp' );
}

function forum_dropdown( $c = false, $a = false ) {
	bb_forum_dropdown( $c, $a );
}

function get_ids_by_role( $role = 'moderator', $sort = 0, $limit_str = '' ) {
	return bb_get_ids_by_role( $role , $sort , $limit_str);
}

function get_deleted_posts( $page = 1, $limit = false, $status = 1, $topic_status = 0 ) {
	return get_deleted_posts( $page , $limit , $status , $topic_status );
}

function bozo_posts( $where ) {
	return bb_bozo_posts( $where );
}

function bozo_topics( $where ) {
	return bb_bozo_topics( $where );
}

function get_bozos( $page = 1 ) {
	return bb_get_bozos($page);
}

function current_user_is_bozo( $topic_id = false ) {
	return bb_current_user_is_bozo( $topic_id );
}

function bozo_pre_permalink() {
	return bb_bozo_pre_permalink();
}

function bozo_latest_filter() {
	return bb_bozo_latest_filter();
}

function bozo_topic_db_filter() {
	return bb_bozo_topic_db_filter();
}

function bozo_profile_db_filter() {
	return bb_bozo_profile_db_filter();
}

function bozo_recount_topics() {
	return bb_bozo_recount_topics();
}

function bozo_recount_users() {
	return bb_bozo_recount_users();
}

function bozo_post_del_class( $status ) {
	return bb_bozo_post_del_class( $status );
}

function bozo_add_recount_list() {
	return bb_bozo_add_recount_list() ;
}

function bozo_topic_pages_add( $add ) {
	return bb_bozo_topic_pages_add( $add );
}

function bozo_get_topic_posts( $topic_posts ) {
	return bb_bozo_get_topic_posts( $topic_posts ) ;
}

function bozo_new_post( $post_id ) {
	return bb_bozo_new_post( $post_id );
}

function bozo_pre_post_status( $status, $post_id, $topic_id ) {
	return bb_bozo_pre_post_status( $status, $post_id, $topic_id ) ;
}

function bozo_delete_post( $post_id, $new_status, $old_status ) {
	return bb_bozo_delete_post( $post_id, $new_status, $old_status ) ;
}

function bozon( $user_id, $topic_id = 0 ) {
	return bb_bozon( $user_id, $topic_id ) ;
}

function fermion( $user_id, $topic_id = 0 ) {
	return bb_fermion( $user_id, $topic_id ) ;
}

function bozo_profile_admin_keys( $a ) {
	return bb_bozo_profile_admin_keys( $a ) ;
}
function bozo_add_admin_page() {
	return bb_bozo_add_admin_page() ;
}

function bozo_admin_page() {
	return bb_bozo_admin_page() ;
}

function encodeit( $matches ) {
	return bb_encodeit( $matches ) ;
}

function decodeit( $matches ) {
	return bb_decodeit( $matches ) ;
}

function code_trick( $text ) {
	return bb_code_trick( $text ) ;
}

function code_trick_reverse( $text ) {
	return bb_code_trick_reverse( $text ) ;
}

function encode_bad( $text ) {
	return bb_encode_bad( $text ) ;
}

function user_sanitize( $text, $strict = false ) {
	return bb_user_sanitize( $text, $strict );
}

function utf8_cut( $utf8_string, $length ) {
	return bb_utf8_cut( $utf8_string, $length ) ;
}

function tag_sanitize( $tag ) {
	return bb_tag_sanitize( $tag ) ;
}

function sanitize_with_dashes( $text, $length = 200 ) { // Multibyte aware
	return bb_sanitize_with_dashes( $text, $length ) ;
}

function show_context( $term, $text ) {
	return bb_show_context( $term, $text );
}

function closed_title( $title ) {
	return bb_closed_title( $title );
}

function make_link_view_all( $link ) {
	return bb_make_link_view_all( $link );
}

function remove_topic_tag( $tag_id, $user_id, $topic_id ) {
	return bb_remove_topic_tag( $tag_id, $user_id, $topic_id );
}

function get_bb_location() {
	$r = bb_get_location();
	if ( !$r )
		$r = apply_filters( 'get_bb_location', '' ); // Deprecated filter
	return $r;
}
?>
