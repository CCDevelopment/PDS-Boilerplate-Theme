<?php
/**
** comments template
**/

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
 return;

//Get only the approved comments
$args = array(
    'status'    => 'approve',
    'max_depth' => 3,
    'style'     => 'ul',
    'type'      => 'comment',
    'post_id'   => get_the_ID()
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {?>
  <div id="comments" class="post-block mt-5 post-comments">
    <h4 class="mb-3">Comments (<?php echo get_comments_number();?>)</h4>
      <ul class="comments">
        <?php
        $args = [
        'style'       => 'ul',
        'format'      => 'html5',
        'short_ping'  => true,
        'walker'      => new PDS_Walker_Comment, // This is our custom comment walker in functions.php
        ];
        wp_list_comments($args);?>
      </ul>
  </div>

<?php } else {
 echo 'No comments found.';
}?>

<div class="post-block mt-5 post-leave-comment">

  <?php
  $post_id = get_the_ID();
  $reply = $_GET['replytocom'];
  $args = array(
        'post_id'           => get_the_ID(),
        'id_form'           => 'commentform',
        'class_form'        => 'contact-form p-4 rounded bg-color-grey',
        'class_submit'      => 'test-class',
        'submit_field'      => '<div class="form-group col mb-0">
                                  <input name="submit" type="submit" id="submit" class="btn btn-primary btn-modern" data-loading-text="Loading..." value="Post Comment">
                                  <input type="hidden" name="comment_post_ID" value="'.$post_id.'" id="comment_post_ID">
                                  <input type="hidden" name="comment_parent" id="comment_parent" value="'.$reply.'">
                                </div> '
      );
      comment_form($args);?>

</div>
