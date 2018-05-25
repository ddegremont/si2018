<?php
require_once "includes/connexion.php";
require_once "includes/twitter.php";
include_once "header.php";
?>
<section class="partenaire">
	<div class="container">
		<div class="title">
			<h3>Fil d'actualité Twitter</h3>
		</div>
		<?php foreach($tweets3 as $tweet): ?>
		<div class="tweet">
			<div class="left">
				<a href="https://twitter.com/<?= $tweet->user->screen_name?>" target="_blank">
					<img src="<?= $tweet->user->profile_image_url?>" alt="" class="avatar">
				</a>
			</div>
			<div class="right">
				<h3 class="name">
					<a href="https://twitter.com/<?= $tweet->user->screen_name?>" target="_blank"><?= $tweet->user->name; ?></a>
				</h3>
				<h5 class="at">@<?= $tweet->user->screen_name; ?></h5>
				<p class="text"><?= $autolink->autoLink($tweet->text); ?></p>
				<?php if (isset($tweet->entities->media[0]->media_url)) { ?>
				<img src="<?= $tweet->entities->media[0]->media_url;?>" style="max-height:250px;" alt="">
				<?php } ?>
				<time class="timeago" datetime="<?= date("c",strtotime($tweet->created_at)); ?>"></time>
			</div>
		</div> 
		<?php endforeach; ?>
	</div>
</section>
<?php 
include_once "footer.php";
?>