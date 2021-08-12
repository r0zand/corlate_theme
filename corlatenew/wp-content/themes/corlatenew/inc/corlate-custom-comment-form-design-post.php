<?php 
// comment form fields re-defined:
add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
function mo_comment_fields_custom_html( $fields ) {
	// first unset the existing fields:
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	unset( $fields['label_submit']);
	unset( $fields[ 'submit_button']);
		unset( $fields[ 'submit_field']);

	// then re-define them as needed:
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$comment_content = ( isset( $commenter['comment_content'] ) && $commenter['comment_content'] ) ? $commenter['comment_content'] : '';
	$fields = [
		'author' => '<div class="col-sm-5"> <div class="form-group">
		<label>Name *</label>
		<input type="text" class="form-control" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" required>
		</div>',
		'email'  => '<div class="form-group">
		<label>Email *</label>
		<input type="email" class="form-control" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required>
		</div>',
		'url'    => '<div class="form-group">
		<label>URL</label>
		<input type="url" class="form-control" name="url" value=" ' . esc_attr( $commenter['comment_author_url'] ) . '">
		</div></div>',
		'comment_field' => '<div class="col-sm-7"><div class="form-group">
		<label>Message *</label>
		<textarea name="message" id="message" value=" ' . esc_attr( $comment_content ) . '" required class="form-control" rows="8"></textarea>
		</div>',
		'submit_button' => '<div class="form-group">
            <input name="%1$s" type="submit" id="%2$s" class="btn btn-primary btn-lg" value="Submit Message" />
        </div></div>',
	];
	// done customizing, now return the fields:
	return $fields;
}
// remove default comment form so it won't appear twice
add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }


add_filter( 'preprocess_comment', 'verify_comments' );
function verify_comments( $commentdata ) {

    if ( empty( $_POST['author'] ) ) {
        wp_die( esc_html__( 'Error: You did not add a name' ) );
    }
 
elseif ( empty( $_POST['email'] ) ) {
        wp_die( esc_html__( 'Error: You did not add a email' ) );
    }
 
elseif ( empty( $_POST['url'] ) ) {
        wp_die( esc_html__( 'Error: You did not add a url' ) );
    }
 

elseif ( empty( $_POST['message'] ) ) {
        wp_die( esc_html__( 'Error: You did not add a message' ) );
    }
    $commentdata['comment_content'] = $_POST['message'];

    return $commentdata;

}


add_action( 'comment_post', 'save_comments' );
function save_comments( $comment_id ) {
    if ( ( isset( $_POST['author'] ) ) && ( ! empty( $_POST['author'] ) ) ) {
        $author = wp_filter_nohtml_kses($_POST['author']);
        add_comment_meta( $comment_id, 'author', $author );
    }


 elseif ( ( isset( $_POST['email'] ) ) && ( ! empty( $_POST['email'] ) ) ) {
        $email = wp_filter_nohtml_kses($_POST['email']);
        add_comment_meta( $comment_id, 'email', $email );
    }


 elseif ( ( isset( $_POST['url'] ) ) && ( ! empty( $_POST['url'] ) ) ) {
        $url = wp_filter_nohtml_kses($_POST['url']);
        add_comment_meta( $comment_id, 'url', $url );
    }


 elseif ( ( isset( $_POST['message'] ) ) && ( ! empty( $_POST['message'] ) ) ) {
        $comment = wp_filter_nohtml_kses($_POST['message']);
        add_comment_meta( $comment_id, 'message', $comment );
    }
}
