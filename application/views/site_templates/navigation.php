
	<nav class="navbar navbar-expand-lg navbar-light bg-tu">
		<h1 class="hidden">Home|About Us|Contact Us</h1>
<div class="container">
  <!-- <a class="navbar-brand" href="#">Home</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <?php foreach($menu_setup as $data): ?>
      <li class="nav-item <?php if($data['ms_has_sub']==1) echo "dropdown" ?>">

        <a class="nav-link <?php if($data['ms_has_sub']==1) echo "dropdown-toggle" ?>" data-toggle="<?php if($data['ms_has_sub']==1) echo "dropdown" ?>" href="<?php echo base_url('site/page/'.$data['slug']); ?>"><?php echo $data['ms_title'] ?></a>
<?php if($data['ms_has_sub']==1){ ?>
        <div class="dropdown-menu">

        <?php foreach($submenu as $key=>$sm):?>
          
        <?php if($data['ms_id']==$sm['sms_ms_id']){ ?>
          
            <a class="dropdown-item" href="<?php echo base_url('site/page/'.$sm['slug']); ?>"><?php echo $sm['sms_title'] ?>
            </a>
          
        <?php } ?>


        <?php endforeach; ?>

        </div>
      <?php }?>
      </li>   
<?php endforeach;?>   
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('site/contact');?>">Contact Us</a>
      </li>
    </ul>
 
  </div>
</div>
</nav>