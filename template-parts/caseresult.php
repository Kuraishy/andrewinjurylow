<div class="case-result-block-list">
  <div class="defualt-content-info text-center"> <?php echo get_field('caseresult_post_heading_content');?> </div>
  <?php if (have_rows('post_case_result_block')):?>
  <div class="row justify-content-center">
    <?php while (have_rows('post_case_result_block')) : the_row(); ?>
    <div class="col-sm-6 col-md-4">
      <div class="case-result-block"> <?php echo get_sub_field('post_case_result_block_content');?> </div>
    </div>
    <?php endwhile;?>
  </div>
  <?php endif;?>
</div>
